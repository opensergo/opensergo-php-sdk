<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opensergo/proto/service_contract/v1/service_contract.proto

namespace Opensergo\Proto\Service_contract\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a field within a message.
 *
 * Generated from protobuf message <code>opensergo.proto.service_contract.v1.FieldDescriptor</code>
 */
class FieldDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>int32 number = 3;</code>
     */
    protected $number = 0;
    /**
     * Generated from protobuf field <code>optional .opensergo.proto.service_contract.v1.FieldDescriptor.Label label = 4;</code>
     */
    protected $label = null;
    /**
     * If type_name is set, this need not be set.  If both this and type_name
     * are set, this must be one of TYPE_ENUM, TYPE_MESSAGE or TYPE_GROUP.
     *
     * Generated from protobuf field <code>.opensergo.proto.service_contract.v1.FieldDescriptor.Type type = 5;</code>
     */
    protected $type = 0;
    /**
     * For message and enum types, this is the name of the type.  If the name
     * starts with a '.', it is fully-qualified.  Otherwise, C++-like scoping
     * rules are used to find the type (i.e. first the nested types within this
     * message are searched, then within the parent, on up to the root
     * namespace).
     *
     * Generated from protobuf field <code>optional string type_name = 6;</code>
     */
    protected $type_name = null;
    /**
     * description of this field
     *
     * Generated from protobuf field <code>optional string description = 7;</code>
     */
    protected $description = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type int $number
     *     @type int $label
     *     @type int $type
     *           If type_name is set, this need not be set.  If both this and type_name
     *           are set, this must be one of TYPE_ENUM, TYPE_MESSAGE or TYPE_GROUP.
     *     @type string $type_name
     *           For message and enum types, this is the name of the type.  If the name
     *           starts with a '.', it is fully-qualified.  Otherwise, C++-like scoping
     *           rules are used to find the type (i.e. first the nested types within this
     *           message are searched, then within the parent, on up to the root
     *           namespace).
     *     @type string $description
     *           description of this field
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
     * Generated from protobuf field <code>int32 number = 3;</code>
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Generated from protobuf field <code>int32 number = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .opensergo.proto.service_contract.v1.FieldDescriptor.Label label = 4;</code>
     * @return int
     */
    public function getLabel()
    {
        return isset($this->label) ? $this->label : 0;
    }

    public function hasLabel()
    {
        return isset($this->label);
    }

    public function clearLabel()
    {
        unset($this->label);
    }

    /**
     * Generated from protobuf field <code>optional .opensergo.proto.service_contract.v1.FieldDescriptor.Label label = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkEnum($var, \Opensergo\Proto\Service_contract\V1\FieldDescriptor\Label::class);
        $this->label = $var;

        return $this;
    }

    /**
     * If type_name is set, this need not be set.  If both this and type_name
     * are set, this must be one of TYPE_ENUM, TYPE_MESSAGE or TYPE_GROUP.
     *
     * Generated from protobuf field <code>.opensergo.proto.service_contract.v1.FieldDescriptor.Type type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * If type_name is set, this need not be set.  If both this and type_name
     * are set, this must be one of TYPE_ENUM, TYPE_MESSAGE or TYPE_GROUP.
     *
     * Generated from protobuf field <code>.opensergo.proto.service_contract.v1.FieldDescriptor.Type type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Opensergo\Proto\Service_contract\V1\FieldDescriptor\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * For message and enum types, this is the name of the type.  If the name
     * starts with a '.', it is fully-qualified.  Otherwise, C++-like scoping
     * rules are used to find the type (i.e. first the nested types within this
     * message are searched, then within the parent, on up to the root
     * namespace).
     *
     * Generated from protobuf field <code>optional string type_name = 6;</code>
     * @return string
     */
    public function getTypeName()
    {
        return isset($this->type_name) ? $this->type_name : '';
    }

    public function hasTypeName()
    {
        return isset($this->type_name);
    }

    public function clearTypeName()
    {
        unset($this->type_name);
    }

    /**
     * For message and enum types, this is the name of the type.  If the name
     * starts with a '.', it is fully-qualified.  Otherwise, C++-like scoping
     * rules are used to find the type (i.e. first the nested types within this
     * message are searched, then within the parent, on up to the root
     * namespace).
     *
     * Generated from protobuf field <code>optional string type_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTypeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->type_name = $var;

        return $this;
    }

    /**
     * description of this field
     *
     * Generated from protobuf field <code>optional string description = 7;</code>
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
     * description of this field
     *
     * Generated from protobuf field <code>optional string description = 7;</code>
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

