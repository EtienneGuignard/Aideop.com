<?php

namespace Container6cynvmL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4d12d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc4592 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesab603 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getConnection', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getMetadataFactory', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getExpressionBuilder', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'beginTransaction', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getCache', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'transactional', array('func' => $func), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'commit', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->commit();
    }

    public function rollback()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'rollback', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getClassMetadata', array('className' => $className), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'createQuery', array('dql' => $dql), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'createNamedQuery', array('name' => $name), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'createQueryBuilder', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'flush', array('entity' => $entity), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'clear', array('entityName' => $entityName), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->clear($entityName);
    }

    public function close()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'close', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->close();
    }

    public function persist($entity)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'persist', array('entity' => $entity), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'remove', array('entity' => $entity), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'refresh', array('entity' => $entity), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'detach', array('entity' => $entity), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'merge', array('entity' => $entity), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'contains', array('entity' => $entity), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getEventManager', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getConfiguration', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'isOpen', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getUnitOfWork', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getProxyFactory', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'initializeObject', array('obj' => $obj), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'getFilters', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'isFiltersStateClean', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'hasFilters', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return $this->valueHolder4d12d->hasFilters();
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

        $instance->initializerc4592 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4d12d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4d12d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4d12d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, '__get', ['name' => $name], $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        if (isset(self::$publicPropertiesab603[$name])) {
            return $this->valueHolder4d12d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d12d;

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

        $targetObject = $this->valueHolder4d12d;
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
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d12d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4d12d;
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
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, '__isset', array('name' => $name), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d12d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4d12d;
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
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, '__unset', array('name' => $name), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4d12d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4d12d;
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
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, '__clone', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        $this->valueHolder4d12d = clone $this->valueHolder4d12d;
    }

    public function __sleep()
    {
        $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, '__sleep', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;

        return array('valueHolder4d12d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc4592 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc4592;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc4592 && ($this->initializerc4592->__invoke($valueHolder4d12d, $this, 'initializeProxy', array(), $this->initializerc4592) || 1) && $this->valueHolder4d12d = $valueHolder4d12d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4d12d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4d12d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
