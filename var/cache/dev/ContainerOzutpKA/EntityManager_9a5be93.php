<?php

namespace ContainerOzutpKA;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd435f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere3d36 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4ed1d = [
        
    ];

    public function getConnection()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getConnection', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getMetadataFactory', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getExpressionBuilder', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'beginTransaction', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getCache', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getCache();
    }

    public function transactional($func)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'transactional', array('func' => $func), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'wrapInTransaction', array('func' => $func), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'commit', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->commit();
    }

    public function rollback()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'rollback', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getClassMetadata', array('className' => $className), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'createQuery', array('dql' => $dql), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'createNamedQuery', array('name' => $name), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'createQueryBuilder', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'flush', array('entity' => $entity), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'clear', array('entityName' => $entityName), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->clear($entityName);
    }

    public function close()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'close', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->close();
    }

    public function persist($entity)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'persist', array('entity' => $entity), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'remove', array('entity' => $entity), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'refresh', array('entity' => $entity), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'detach', array('entity' => $entity), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'merge', array('entity' => $entity), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getRepository', array('entityName' => $entityName), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'contains', array('entity' => $entity), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getEventManager', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getConfiguration', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'isOpen', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getUnitOfWork', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getProxyFactory', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'initializeObject', array('obj' => $obj), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'getFilters', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'isFiltersStateClean', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'hasFilters', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return $this->valueHolderd435f->hasFilters();
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

        $instance->initializere3d36 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd435f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd435f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd435f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, '__get', ['name' => $name], $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        if (isset(self::$publicProperties4ed1d[$name])) {
            return $this->valueHolderd435f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd435f;

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

        $targetObject = $this->valueHolderd435f;
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
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd435f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd435f;
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
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, '__isset', array('name' => $name), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd435f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd435f;
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
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, '__unset', array('name' => $name), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd435f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd435f;
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
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, '__clone', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        $this->valueHolderd435f = clone $this->valueHolderd435f;
    }

    public function __sleep()
    {
        $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, '__sleep', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;

        return array('valueHolderd435f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere3d36 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere3d36;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere3d36 && ($this->initializere3d36->__invoke($valueHolderd435f, $this, 'initializeProxy', array(), $this->initializere3d36) || 1) && $this->valueHolderd435f = $valueHolderd435f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd435f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd435f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
