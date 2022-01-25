<?php

namespace ContainerJiOEx0Q;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0ee8a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializereb283 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb05d7 = [
        
    ];

    public function getConnection()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getConnection', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getMetadataFactory', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getExpressionBuilder', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'beginTransaction', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getCache', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getCache();
    }

    public function transactional($func)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'transactional', array('func' => $func), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'wrapInTransaction', array('func' => $func), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'commit', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->commit();
    }

    public function rollback()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'rollback', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getClassMetadata', array('className' => $className), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'createQuery', array('dql' => $dql), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'createNamedQuery', array('name' => $name), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'createQueryBuilder', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'flush', array('entity' => $entity), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'clear', array('entityName' => $entityName), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->clear($entityName);
    }

    public function close()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'close', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->close();
    }

    public function persist($entity)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'persist', array('entity' => $entity), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'remove', array('entity' => $entity), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'refresh', array('entity' => $entity), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'detach', array('entity' => $entity), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'merge', array('entity' => $entity), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getRepository', array('entityName' => $entityName), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'contains', array('entity' => $entity), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getEventManager', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getConfiguration', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'isOpen', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getUnitOfWork', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getProxyFactory', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'initializeObject', array('obj' => $obj), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'getFilters', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'isFiltersStateClean', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'hasFilters', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return $this->valueHolder0ee8a->hasFilters();
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

        $instance->initializereb283 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0ee8a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0ee8a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0ee8a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, '__get', ['name' => $name], $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        if (isset(self::$publicPropertiesb05d7[$name])) {
            return $this->valueHolder0ee8a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ee8a;

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

        $targetObject = $this->valueHolder0ee8a;
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
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ee8a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0ee8a;
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
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, '__isset', array('name' => $name), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ee8a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0ee8a;
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
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, '__unset', array('name' => $name), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0ee8a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0ee8a;
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
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, '__clone', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        $this->valueHolder0ee8a = clone $this->valueHolder0ee8a;
    }

    public function __sleep()
    {
        $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, '__sleep', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;

        return array('valueHolder0ee8a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializereb283 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializereb283;
    }

    public function initializeProxy() : bool
    {
        return $this->initializereb283 && ($this->initializereb283->__invoke($valueHolder0ee8a, $this, 'initializeProxy', array(), $this->initializereb283) || 1) && $this->valueHolder0ee8a = $valueHolder0ee8a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0ee8a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0ee8a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
