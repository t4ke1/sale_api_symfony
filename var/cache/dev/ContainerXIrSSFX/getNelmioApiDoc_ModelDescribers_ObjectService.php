<?php

namespace ContainerXIrSSFX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_ModelDescribers_ObjectService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'nelmio_api_doc.model_describers.object' shared service.
     *
     * @return \Nelmio\ApiDocBundle\ModelDescriber\ObjectModelDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/ModelDescriber/ModelDescriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Describer/ModelRegistryAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/Describer/ModelRegistryAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/ModelDescriber/ApplyOpenApiDiscriminatorTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/ModelDescriber/ObjectModelDescriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/PropertyDescriber/PropertyDescriberInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/api-doc-bundle/src/PropertyDescriber/PropertyDescriber.php';

        return $container->privates['nelmio_api_doc.model_describers.object'] = new \Nelmio\ApiDocBundle\ModelDescriber\ObjectModelDescriber(($container->privates['property_info'] ?? self::getPropertyInfoService($container)), NULL, new \Nelmio\ApiDocBundle\PropertyDescriber\PropertyDescriber(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['nelmio_api_doc.object_model.property_describers.nullable'] ??= new \Nelmio\ApiDocBundle\PropertyDescriber\NullablePropertyDescriber());
            yield 1 => ($container->privates['nelmio_api_doc.object_model.property_describers.required'] ??= new \Nelmio\ApiDocBundle\PropertyDescriber\RequiredPropertyDescriber());
            yield 2 => ($container->privates['nelmio_api_doc.object_model.property_describers.array'] ??= new \Nelmio\ApiDocBundle\PropertyDescriber\ArrayPropertyDescriber());
            yield 3 => ($container->privates['nelmio_api_doc.object_model.property_describers.dictionary'] ??= new \Nelmio\ApiDocBundle\PropertyDescriber\DictionaryPropertyDescriber());
            yield 4 => ($container->privates['nelmio_api_doc.object_model.property_describers.boolean'] ??= new \Nelmio\ApiDocBundle\PropertyDescriber\BooleanPropertyDescriber());
            yield 5 => ($container->privates['nelmio_api_doc.object_model.property_describers.float'] ??= new \Nelmio\ApiDocBundle\PropertyDescriber\FloatPropertyDescriber());
            yield 6 => ($container->privates['nelmio_api_doc.object_model.property_describers.integer'] ??= new \Nelmio\ApiDocBundle\PropertyDescriber\IntegerPropertyDescriber());
            yield 7 => ($container->privates['nelmio_api_doc.object_model.property_describers.string'] ??= new \Nelmio\ApiDocBundle\PropertyDescriber\StringPropertyDescriber());
            yield 8 => ($container->privates['nelmio_api_doc.object_model.property_describers.date_time'] ??= new \Nelmio\ApiDocBundle\PropertyDescriber\DateTimePropertyDescriber());
            yield 9 => ($container->privates['nelmio_api_doc.object_model.property_describers.object'] ??= new \Nelmio\ApiDocBundle\PropertyDescriber\ObjectPropertyDescriber());
            yield 10 => ($container->privates['nelmio_api_doc.object_model.property_describers.compound'] ??= new \Nelmio\ApiDocBundle\PropertyDescriber\CompoundPropertyDescriber());
        }, 11)), ['json'], ($container->privates['serializer.name_converter.metadata_aware'] ?? self::getSerializer_NameConverter_MetadataAwareService($container)), false, ($container->privates['serializer.mapping.class_metadata_factory'] ?? self::getSerializer_Mapping_ClassMetadataFactoryService($container)));
    }
}
