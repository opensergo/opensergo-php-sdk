<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opensergo/proto/service_contract/v1/service_contract.proto

namespace Opensergo\Proto\Service_contract\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a service.
 *
 * Generated from protobuf message <code>opensergo.proto.service_contract.v1.ServiceDescriptor</code>
 */
class ServiceDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>repeated .opensergo.proto.service_contract.v1.MethodDescriptor methods = 2;</code>
     */
    private $methods;
    /**
     * description of this service
     *
     * Generated from protobuf field <code>optional string description = 3;</code>
     */
    protected $description = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type \Opensergo\Proto\Service_contract\V1\MethodDescriptor[]|\Google\Protobuf\Internal\RepeatedField $methods
     *     @type string $description
     *           description of this service
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opensergo\Proto\ServiceContract\V1\ServiceContract::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .opensergo.proto.service_contract.v1.MethodDescriptor methods = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * Generated from protobuf field <code>repeated .opensergo.proto.service_contract.v1.MethodDescriptor methods = 2;</code>
     * @param \Opensergo\Proto\Service_contract\V1\MethodDescriptor[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMethods($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opensergo\Proto\Service_contract\V1\MethodDescriptor::class);
        $this->methods = $arr;

        return $this;
    }

    /**
     * description of this service
     *
     * Generated from protobuf field <code>optional string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * description of this service
     *
     * Generated from protobuf field <code>optional string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

