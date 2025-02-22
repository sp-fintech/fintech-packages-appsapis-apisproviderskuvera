<?php
/**
 * GetFundCategories200ResponseInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Apps\Fintech\Packages\Apis\Providers\Kuvera
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Kuvera
 *
 * Unofficial read API specification for Kuvera.  See Introduction on left to get a summary.
 *
 * The version of the OpenAPI document: 
 * Contact: kuvera.api@captnemo.in
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Apps\Fintech\Packages\Apis\Providers\Kuvera\Model;

use \ArrayAccess;
use \Apps\Fintech\Packages\Apis\Providers\Kuvera\ObjectSerializer;

/**
 * GetFundCategories200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  Apps\Fintech\Packages\Apis\Providers\Kuvera
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetFundCategories200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_fund_categories_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'category_name' => 'string',
        'report_date' => 'string',
        'week_1' => 'float',
        'month_1' => 'float',
        'month_3' => 'float',
        'month_6' => 'float',
        'year_1' => 'float',
        'year_3' => 'float',
        'year_5' => 'float',
        'year_10' => 'float',
        'inception' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'category_name' => null,
        'report_date' => null,
        'week_1' => null,
        'month_1' => null,
        'month_3' => null,
        'month_6' => null,
        'year_1' => null,
        'year_3' => null,
        'year_5' => null,
        'year_10' => null,
        'inception' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'category_name' => false,
        'report_date' => false,
        'week_1' => false,
        'month_1' => false,
        'month_3' => false,
        'month_6' => false,
        'year_1' => false,
        'year_3' => false,
        'year_5' => false,
        'year_10' => false,
        'inception' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'category_name' => 'category_name',
        'report_date' => 'report_date',
        'week_1' => 'week_1',
        'month_1' => 'month_1',
        'month_3' => 'month_3',
        'month_6' => 'month_6',
        'year_1' => 'year_1',
        'year_3' => 'year_3',
        'year_5' => 'year_5',
        'year_10' => 'year_10',
        'inception' => 'inception'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category_name' => 'setCategoryName',
        'report_date' => 'setReportDate',
        'week_1' => 'setWeek1',
        'month_1' => 'setMonth1',
        'month_3' => 'setMonth3',
        'month_6' => 'setMonth6',
        'year_1' => 'setYear1',
        'year_3' => 'setYear3',
        'year_5' => 'setYear5',
        'year_10' => 'setYear10',
        'inception' => 'setInception'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category_name' => 'getCategoryName',
        'report_date' => 'getReportDate',
        'week_1' => 'getWeek1',
        'month_1' => 'getMonth1',
        'month_3' => 'getMonth3',
        'month_6' => 'getMonth6',
        'year_1' => 'getYear1',
        'year_3' => 'getYear3',
        'year_5' => 'getYear5',
        'year_10' => 'getYear10',
        'inception' => 'getInception'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('category_name', $data ?? [], null);
        $this->setIfExists('report_date', $data ?? [], null);
        $this->setIfExists('week_1', $data ?? [], null);
        $this->setIfExists('month_1', $data ?? [], null);
        $this->setIfExists('month_3', $data ?? [], null);
        $this->setIfExists('month_6', $data ?? [], null);
        $this->setIfExists('year_1', $data ?? [], null);
        $this->setIfExists('year_3', $data ?? [], null);
        $this->setIfExists('year_5', $data ?? [], null);
        $this->setIfExists('year_10', $data ?? [], null);
        $this->setIfExists('inception', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['category_name'] === null) {
            $invalidProperties[] = "'category_name' can't be null";
        }
        if ((mb_strlen($this->container['category_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'category_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['report_date'] === null) {
            $invalidProperties[] = "'report_date' can't be null";
        }
        if ((mb_strlen($this->container['report_date']) < 1)) {
            $invalidProperties[] = "invalid value for 'report_date', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['week_1'] === null) {
            $invalidProperties[] = "'week_1' can't be null";
        }
        if ($this->container['month_1'] === null) {
            $invalidProperties[] = "'month_1' can't be null";
        }
        if ($this->container['month_3'] === null) {
            $invalidProperties[] = "'month_3' can't be null";
        }
        if ($this->container['month_6'] === null) {
            $invalidProperties[] = "'month_6' can't be null";
        }
        if ($this->container['year_1'] === null) {
            $invalidProperties[] = "'year_1' can't be null";
        }
        if ($this->container['year_3'] === null) {
            $invalidProperties[] = "'year_3' can't be null";
        }
        if ($this->container['year_5'] === null) {
            $invalidProperties[] = "'year_5' can't be null";
        }
        if ($this->container['year_10'] === null) {
            $invalidProperties[] = "'year_10' can't be null";
        }
        if ($this->container['inception'] === null) {
            $invalidProperties[] = "'inception' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets category_name
     *
     * @return string
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     *
     * @param string $category_name Category Name
     *
     * @return self
     */
    public function setCategoryName($category_name)
    {
        if (is_null($category_name)) {
            throw new \InvalidArgumentException('non-nullable category_name cannot be null');
        }

        if ((mb_strlen($category_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $category_name when calling GetFundCategories200ResponseInner., must be bigger than or equal to 1.');
        }

        $this->container['category_name'] = $category_name;

        return $this;
    }

    /**
     * Gets report_date
     *
     * @return string
     */
    public function getReportDate()
    {
        return $this->container['report_date'];
    }

    /**
     * Sets report_date
     *
     * @param string $report_date Date last updated
     *
     * @return self
     */
    public function setReportDate($report_date)
    {
        if (is_null($report_date)) {
            throw new \InvalidArgumentException('non-nullable report_date cannot be null');
        }

        if ((mb_strlen($report_date) < 1)) {
            throw new \InvalidArgumentException('invalid length for $report_date when calling GetFundCategories200ResponseInner., must be bigger than or equal to 1.');
        }

        $this->container['report_date'] = $report_date;

        return $this;
    }

    /**
     * Gets week_1
     *
     * @return float
     */
    public function getWeek1()
    {
        return $this->container['week_1'];
    }

    /**
     * Sets week_1
     *
     * @param float $week_1 Returns in last 1 week
     *
     * @return self
     */
    public function setWeek1($week_1)
    {
        if (is_null($week_1)) {
            throw new \InvalidArgumentException('non-nullable week_1 cannot be null');
        }
        $this->container['week_1'] = $week_1;

        return $this;
    }

    /**
     * Gets month_1
     *
     * @return float
     */
    public function getMonth1()
    {
        return $this->container['month_1'];
    }

    /**
     * Sets month_1
     *
     * @param float $month_1 Returns in last 1 month
     *
     * @return self
     */
    public function setMonth1($month_1)
    {
        if (is_null($month_1)) {
            throw new \InvalidArgumentException('non-nullable month_1 cannot be null');
        }
        $this->container['month_1'] = $month_1;

        return $this;
    }

    /**
     * Gets month_3
     *
     * @return float
     */
    public function getMonth3()
    {
        return $this->container['month_3'];
    }

    /**
     * Sets month_3
     *
     * @param float $month_3 Returns in last 3 months
     *
     * @return self
     */
    public function setMonth3($month_3)
    {
        if (is_null($month_3)) {
            throw new \InvalidArgumentException('non-nullable month_3 cannot be null');
        }
        $this->container['month_3'] = $month_3;

        return $this;
    }

    /**
     * Gets month_6
     *
     * @return float
     */
    public function getMonth6()
    {
        return $this->container['month_6'];
    }

    /**
     * Sets month_6
     *
     * @param float $month_6 Returns in last 6 months
     *
     * @return self
     */
    public function setMonth6($month_6)
    {
        if (is_null($month_6)) {
            throw new \InvalidArgumentException('non-nullable month_6 cannot be null');
        }
        $this->container['month_6'] = $month_6;

        return $this;
    }

    /**
     * Gets year_1
     *
     * @return float
     */
    public function getYear1()
    {
        return $this->container['year_1'];
    }

    /**
     * Sets year_1
     *
     * @param float $year_1 Returns in last 1 year
     *
     * @return self
     */
    public function setYear1($year_1)
    {
        if (is_null($year_1)) {
            throw new \InvalidArgumentException('non-nullable year_1 cannot be null');
        }
        $this->container['year_1'] = $year_1;

        return $this;
    }

    /**
     * Gets year_3
     *
     * @return float
     */
    public function getYear3()
    {
        return $this->container['year_3'];
    }

    /**
     * Sets year_3
     *
     * @param float $year_3 Returns in last 3 years
     *
     * @return self
     */
    public function setYear3($year_3)
    {
        if (is_null($year_3)) {
            throw new \InvalidArgumentException('non-nullable year_3 cannot be null');
        }
        $this->container['year_3'] = $year_3;

        return $this;
    }

    /**
     * Gets year_5
     *
     * @return float
     */
    public function getYear5()
    {
        return $this->container['year_5'];
    }

    /**
     * Sets year_5
     *
     * @param float $year_5 Returns in last 5 years
     *
     * @return self
     */
    public function setYear5($year_5)
    {
        if (is_null($year_5)) {
            throw new \InvalidArgumentException('non-nullable year_5 cannot be null');
        }
        $this->container['year_5'] = $year_5;

        return $this;
    }

    /**
     * Gets year_10
     *
     * @return float
     */
    public function getYear10()
    {
        return $this->container['year_10'];
    }

    /**
     * Sets year_10
     *
     * @param float $year_10 10 year returns for this category
     *
     * @return self
     */
    public function setYear10($year_10)
    {
        if (is_null($year_10)) {
            throw new \InvalidArgumentException('non-nullable year_10 cannot be null');
        }
        $this->container['year_10'] = $year_10;

        return $this;
    }

    /**
     * Gets inception
     *
     * @return float
     */
    public function getInception()
    {
        return $this->container['inception'];
    }

    /**
     * Sets inception
     *
     * @param float $inception Returns since inception
     *
     * @return self
     */
    public function setInception($inception)
    {
        if (is_null($inception)) {
            throw new \InvalidArgumentException('non-nullable inception cannot be null');
        }
        $this->container['inception'] = $inception;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


