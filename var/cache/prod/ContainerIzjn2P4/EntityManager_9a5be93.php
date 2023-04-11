<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderc2177 = null;
    private $initializerb13dd = null;
    private static $publicProperties8e5d3 = [
        
    ];
    public function getConnection()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getConnection', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getMetadataFactory', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getExpressionBuilder', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'beginTransaction', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getCache', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'transactional', array('func' => $func), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'commit', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->commit();
    }
    public function rollback()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'rollback', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getClassMetadata', array('className' => $className), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'createQuery', array('dql' => $dql), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'createNamedQuery', array('name' => $name), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'createQueryBuilder', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'flush', array('entity' => $entity), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'clear', array('entityName' => $entityName), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->clear($entityName);
    }
    public function close()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'close', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->close();
    }
    public function persist($entity)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'persist', array('entity' => $entity), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'remove', array('entity' => $entity), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'refresh', array('entity' => $entity), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'detach', array('entity' => $entity), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'merge', array('entity' => $entity), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'contains', array('entity' => $entity), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getEventManager', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getConfiguration', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'isOpen', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getUnitOfWork', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getProxyFactory', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'initializeObject', array('obj' => $obj), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'getFilters', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'isFiltersStateClean', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'hasFilters', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return $this->valueHolderc2177->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb13dd = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderc2177) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc2177 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderc2177->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, '__get', ['name' => $name], $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        if (isset(self::$publicProperties8e5d3[$name])) {
            return $this->valueHolderc2177->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2177;
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
        $targetObject = $this->valueHolderc2177;
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
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2177;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderc2177;
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
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, '__isset', array('name' => $name), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2177;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderc2177;
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
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, '__unset', array('name' => $name), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc2177;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderc2177;
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
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, '__clone', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        $this->valueHolderc2177 = clone $this->valueHolderc2177;
    }
    public function __sleep()
    {
        $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, '__sleep', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
        return array('valueHolderc2177');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb13dd = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb13dd;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb13dd && ($this->initializerb13dd->__invoke($valueHolderc2177, $this, 'initializeProxy', array(), $this->initializerb13dd) || 1) && $this->valueHolderc2177 = $valueHolderc2177;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc2177;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc2177;
    }
}
