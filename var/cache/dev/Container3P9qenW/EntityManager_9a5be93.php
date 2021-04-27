<?php

namespace Container3P9qenW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf9de1 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer68f55 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf7afd = [
        
    ];

    public function getConnection()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getConnection', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getMetadataFactory', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getExpressionBuilder', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'beginTransaction', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getCache', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getCache();
    }

    public function transactional($func)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'transactional', array('func' => $func), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->transactional($func);
    }

    public function commit()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'commit', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->commit();
    }

    public function rollback()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'rollback', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getClassMetadata', array('className' => $className), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'createQuery', array('dql' => $dql), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'createNamedQuery', array('name' => $name), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'createQueryBuilder', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'flush', array('entity' => $entity), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'clear', array('entityName' => $entityName), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->clear($entityName);
    }

    public function close()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'close', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->close();
    }

    public function persist($entity)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'persist', array('entity' => $entity), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'remove', array('entity' => $entity), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'refresh', array('entity' => $entity), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'detach', array('entity' => $entity), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'merge', array('entity' => $entity), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getRepository', array('entityName' => $entityName), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'contains', array('entity' => $entity), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getEventManager', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getConfiguration', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'isOpen', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getUnitOfWork', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getProxyFactory', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'initializeObject', array('obj' => $obj), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'getFilters', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'isFiltersStateClean', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'hasFilters', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return $this->valueHolderf9de1->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer68f55 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf9de1) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf9de1 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf9de1->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, '__get', ['name' => $name], $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        if (isset(self::$publicPropertiesf7afd[$name])) {
            return $this->valueHolderf9de1->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9de1;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf9de1;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9de1;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf9de1;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, '__isset', array('name' => $name), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9de1;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf9de1;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, '__unset', array('name' => $name), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf9de1;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf9de1;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, '__clone', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        $this->valueHolderf9de1 = clone $this->valueHolderf9de1;
    }

    public function __sleep()
    {
        $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, '__sleep', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;

        return array('valueHolderf9de1');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer68f55 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer68f55;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer68f55 && ($this->initializer68f55->__invoke($valueHolderf9de1, $this, 'initializeProxy', array(), $this->initializer68f55) || 1) && $this->valueHolderf9de1 = $valueHolderf9de1;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf9de1;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf9de1;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
