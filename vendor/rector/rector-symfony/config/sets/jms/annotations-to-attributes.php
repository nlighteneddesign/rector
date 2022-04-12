<?php

declare (strict_types=1);
namespace RectorPrefix20220412;

use Rector\Php80\Rector\Class_\AnnotationToAttributeRector;
use Rector\Php80\ValueObject\AnnotationToAttribute;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
/**
 * @see https://github.com/schmittjoh/serializer/pull/1320
 * @see https://github.com/schmittjoh/serializer/pull/1332
 * @see https://github.com/schmittjoh/serializer/pull/1337
 */
return static function (\Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator $containerConfigurator) : void {
    $services = $containerConfigurator->services();
    $services->set(\Rector\Php80\Rector\Class_\AnnotationToAttributeRector::class)->configure([new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\Accessor'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\AccessorOrder'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\AccessType'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\Discriminator'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\Exclude'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\ExclusionPolicy'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\Expose'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\Groups'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\Inline'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\MaxDepth'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\PostDeserialize'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\PostSerialize'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\PreSerialize'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\ReadOnly'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\ReadOnlyProperty'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\SerializedName'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\Since'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\SkipWhenEmpty'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\Type'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\Until'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\VirtualProperty'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\XmlAttributeMap'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\XmlAttribute'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\XmlDiscriminator'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\XmlElement'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\XmlKeyValuePairs'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\XmlList'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\XmlMap'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\XmlNamespace'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\XmlRoot'), new \Rector\Php80\ValueObject\AnnotationToAttribute('JMS\\Serializer\\Annotation\\XmlValue')]);
};
