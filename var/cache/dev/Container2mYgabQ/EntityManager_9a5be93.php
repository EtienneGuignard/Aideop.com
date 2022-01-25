<?php

namespace Container2mYgabQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder25179 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1d736 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb4ecf = [
        
    ];

    public function getConnection()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getConnection', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getMetadataFactory', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getExpressionBuilder', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'beginTransaction', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getCache', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'transactional', array('func' => $func), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'commit', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->commit();
    }

    public function rollback()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'rollback', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getClassMetadata', array('className' => $className), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'createQuery', array('dql' => $dql), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'createNamedQuery', array('name' => $name), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'createQueryBuilder', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'flush', array('entity' => $entity), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'clear', array('entityName' => $entityName), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->clear($entityName);
    }

    public function close()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'close', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->close();
    }

    public function persist($entity)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'persist', array('entity' => $entity), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'remove', array('entity' => $entity), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'refresh', array('entity' => $entity), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'detach', array('entity' => $entity), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'merge', array('entity' => $entity), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'contains', array('entity' => $entity), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getEventManager', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getConfiguration', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'isOpen', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getUnitOfWork', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getProxyFactory', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'initializeObject', array('obj' => $obj), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'getFilters', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'isFiltersStateClean', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'hasFilters', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return $this->valueHolder25179->hasFilters();
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

        $instance->initializer1d736 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder25179) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder25179 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder25179->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, '__get', ['name' => $name], $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        if (isset(self::$publicPropertiesb4ecf[$name])) {
            return $this->valueHolder25179->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25179;

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

        $targetObject = $this->valueHolder25179;
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
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25179;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder25179;
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
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, '__isset', array('name' => $name), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25179;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder25179;
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
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, '__unset', array('name' => $name), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25179;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder25179;
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
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, '__clone', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        $this->valueHolder25179 = clone $this->valueHolder25179;
    }

    public function __sleep()
    {
        $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, '__sleep', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;

        return array('valueHolder25179');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1d736 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1d736;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1d736 && ($this->initializer1d736->__invoke($valueHolder25179, $this, 'initializeProxy', array(), $this->initializer1d736) || 1) && $this->valueHolder25179 = $valueHolder25179;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder25179;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder25179;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
