<?php

namespace ContainerCOUx14T;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderbd05a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer97dfe = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5b896 = [
        
    ];

    public function getConnection()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getConnection', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getMetadataFactory', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getExpressionBuilder', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'beginTransaction', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getCache', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'transactional', array('func' => $func), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'commit', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->commit();
    }

    public function rollback()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'rollback', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getClassMetadata', array('className' => $className), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'createQuery', array('dql' => $dql), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'createNamedQuery', array('name' => $name), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'createQueryBuilder', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'flush', array('entity' => $entity), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'clear', array('entityName' => $entityName), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->clear($entityName);
    }

    public function close()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'close', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->close();
    }

    public function persist($entity)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'persist', array('entity' => $entity), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'remove', array('entity' => $entity), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'refresh', array('entity' => $entity), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'detach', array('entity' => $entity), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'merge', array('entity' => $entity), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'contains', array('entity' => $entity), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getEventManager', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getConfiguration', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'isOpen', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getUnitOfWork', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getProxyFactory', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'initializeObject', array('obj' => $obj), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'getFilters', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'isFiltersStateClean', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'hasFilters', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return $this->valueHolderbd05a->hasFilters();
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

        $instance->initializer97dfe = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderbd05a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderbd05a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderbd05a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, '__get', ['name' => $name], $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        if (isset(self::$publicProperties5b896[$name])) {
            return $this->valueHolderbd05a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd05a;

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

        $targetObject = $this->valueHolderbd05a;
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
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd05a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderbd05a;
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
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, '__isset', array('name' => $name), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd05a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderbd05a;
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
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, '__unset', array('name' => $name), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbd05a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderbd05a;
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
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, '__clone', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        $this->valueHolderbd05a = clone $this->valueHolderbd05a;
    }

    public function __sleep()
    {
        $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, '__sleep', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;

        return array('valueHolderbd05a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer97dfe = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer97dfe;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer97dfe && ($this->initializer97dfe->__invoke($valueHolderbd05a, $this, 'initializeProxy', array(), $this->initializer97dfe) || 1) && $this->valueHolderbd05a = $valueHolderbd05a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbd05a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbd05a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
