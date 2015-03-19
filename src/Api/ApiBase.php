<?php

namespace Picoss\SMoney\Api;

use Doctrine\Common\Collections\ArrayCollection;
use Picoss\SMoney\Entity\EntityBase;
use Picoss\SMoney\SMoneyApi;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

abstract class ApiBase
{
    /**
     * Root instance
     *
     * @var SMoneyApi
     */
    private $root;

    /**
     * Api version
     *
     * @var int $apiVersion
     */
    protected $apiVersion = 1;

    /**
     * Api output format
     *
     * @var string $outputFormat
     */
    private $outputFormat = 'json';

    public function __construct(SMoneyApi $root)
    {
        $this->root = $root;
    }

    protected function getAll($url, $entityClassName)
    {
        $headers = $this->getBaseHeaders();

        $response = $this->root->getHttpClient()->get($url, [], $headers);

        return $this->castResponseToEntity($response->json(['object' => true]), $entityClassName);
    }

    protected function getOne($url, $entityClassName)
    {
        $headers = $this->getBaseHeaders();

        $response = $this->root->getHttpClient()->get($url, [], $headers);

        return $this->castResponseToEntity($response->json(['object' => true]), $entityClassName);
    }

    protected function createObject($url, $entity)
    {
        $headers = $this->getBaseHeaders();

        $requestData = $this->getEntityRequestData($entity);

        $body = json_encode($requestData);

        $response = $this->root->getHttpClient()->post($url, $body, $headers);

        return $this->castResponseToEntity($response->json(['object' => true]), get_class($entity));
    }

    protected function updateObject($url, $entity)
    {
        $headers = $this->getBaseHeaders();

        $requestData = $this->getEntityRequestData($entity);

        $body = json_encode($requestData);

        $response = $this->root->getHttpClient()->put($url, $body, $headers);

        return $this->castResponseToEntity($response->json(['object' => true]), get_class($entity));
    }

    protected function deleteObject($url)
    {
        $headers = $this->getBaseHeaders();

        $response = $this->root->getHttpClient()->delete($url, $headers);
    }

    private function castResponseToEntity($response, $entityClassName)
    {
        if (is_array($response)) {
            $list = new ArrayCollection();
            foreach ($response as $responseObject) {
                $list->add($this->castResponseToEntity($responseObject, $entityClassName));
            }
            return $list;
        }

        if (!class_exists($entityClassName)) {
            throw new \Exception(sprintf('Class "%s" does not exists.', $entityClassName));
        }

        $entity = new $entityClassName();

        $responseReflection = new \ReflectionObject($response);
        $entityReflection = new \ReflectionClass($entityClassName);
        $responseProperties = $responseReflection->getProperties();

        $subObjects = $entity->getSubObjects();

        foreach ($responseProperties as $responseProperty) {

            $responseProperty->setAccessible(true);

            $name = $responseProperty->getName();
            $value = $responseProperty->getValue($response);

            if ($entityReflection->hasProperty($name)) {

                $entityProperty = $entityReflection->getProperty($name);
                $entityProperty->setAccessible(true);

                // is sub object?
                if (isset($subObjects[$name])) {
                    if (is_null($value)) {
                        $object = null;
                    } else {
                        $object = $this->castResponseToEntity($value, $subObjects[$name]);
                    }

                    $entityProperty->setValue($entity, $object);
                } else {
                    $entityProperty->setValue($entity, $value);
                }

//                // has dependent object?
//                if (isset($dependsObjects[$name])) {
//                    $dependsObject = $dependsObjects[$name];
//                    $entityDependProperty = $entityReflection->getProperty($dependsObject['_property_name']);
//                    $entityDependProperty->setAccessible(true);
//                    $entityDependProperty->setValue(
//                        $entity,
//                        $this->CastResponseToEntity($response, $dependsObject[$value], true)
//                    );
//                }
            }
        }

        return $entity;
    }

    private function getEntityRequestData($entity)
    {
        $data = [];
        $updateableFields = $entity->getUpdateableFields();

        $entityReflection = new \ReflectionClass($entity);

        foreach ($updateableFields as $field) {
            if ($entityReflection->hasProperty($field)) {
                $property = $entityReflection->getProperty($field);
                $property->setAccessible(true);
                $value = $property->getValue($entity);

                if (is_object($value)) {
                    if ($value instanceof EntityBase) {
                        $value = $this->getEntityRequestData($value);
                    }
                    elseif ($value instanceof \DateTime) {
                        $value = $value->format('c');
                    }
                }
                $data[$field] = $value;
            }
        }

        return $data;
    }

    protected function getApiVersion()
    {
        return $this->apiVersion;
    }

    protected function getOutputFormat()
    {
        return $this->outputFormat;
    }

    private function getBaseHeaders()
    {
        $pattern = 'application/vnd.s-money.v%s+%s';

        return [
            'Accept' => sprintf($pattern, $this->getApiVersion(), $this->getOutputFormat()),
            'Content-Type' => sprintf($pattern, $this->getApiVersion(), $this->getOutputFormat()),
        ];
    }
}