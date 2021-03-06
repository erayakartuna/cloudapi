<?php
/**
 * PlateDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * OpenALPR Cloud API
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * PlateDetails Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PlateDetails implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'plate_details';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'plate' => 'string',
        'matches_template' => 'int',
        'requested_topn' => 'int',
        'processing_time_ms' => 'float',
        'confidence' => 'float',
        'region' => 'string',
        'region_confidence' => 'float',
        'coordinates' => '\Swagger\Client\Model\Coordinate[]',
        'candidates' => '\Swagger\Client\Model\PlateCandidate[]',
        'vehicle_region' => '\Swagger\Client\Model\RegionOfInterest',
        'vehicle' => '\Swagger\Client\Model\VehicleDetails'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'plate' => 'plate',
        'matches_template' => 'matches_template',
        'requested_topn' => 'requested_topn',
        'processing_time_ms' => 'processing_time_ms',
        'confidence' => 'confidence',
        'region' => 'region',
        'region_confidence' => 'region_confidence',
        'coordinates' => 'coordinates',
        'candidates' => 'candidates',
        'vehicle_region' => 'vehicle_region',
        'vehicle' => 'vehicle'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'plate' => 'setPlate',
        'matches_template' => 'setMatchesTemplate',
        'requested_topn' => 'setRequestedTopn',
        'processing_time_ms' => 'setProcessingTimeMs',
        'confidence' => 'setConfidence',
        'region' => 'setRegion',
        'region_confidence' => 'setRegionConfidence',
        'coordinates' => 'setCoordinates',
        'candidates' => 'setCandidates',
        'vehicle_region' => 'setVehicleRegion',
        'vehicle' => 'setVehicle'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'plate' => 'getPlate',
        'matches_template' => 'getMatchesTemplate',
        'requested_topn' => 'getRequestedTopn',
        'processing_time_ms' => 'getProcessingTimeMs',
        'confidence' => 'getConfidence',
        'region' => 'getRegion',
        'region_confidence' => 'getRegionConfidence',
        'coordinates' => 'getCoordinates',
        'candidates' => 'getCandidates',
        'vehicle_region' => 'getVehicleRegion',
        'vehicle' => 'getVehicle'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['plate'] = isset($data['plate']) ? $data['plate'] : null;
        $this->container['matches_template'] = isset($data['matches_template']) ? $data['matches_template'] : null;
        $this->container['requested_topn'] = isset($data['requested_topn']) ? $data['requested_topn'] : null;
        $this->container['processing_time_ms'] = isset($data['processing_time_ms']) ? $data['processing_time_ms'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['region_confidence'] = isset($data['region_confidence']) ? $data['region_confidence'] : null;
        $this->container['coordinates'] = isset($data['coordinates']) ? $data['coordinates'] : null;
        $this->container['candidates'] = isset($data['candidates']) ? $data['candidates'] : null;
        $this->container['vehicle_region'] = isset($data['vehicle_region']) ? $data['vehicle_region'] : null;
        $this->container['vehicle'] = isset($data['vehicle']) ? $data['vehicle'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets plate
     * @return string
     */
    public function getPlate()
    {
        return $this->container['plate'];
    }

    /**
     * Sets plate
     * @param string $plate Best plate number for this plate
     * @return $this
     */
    public function setPlate($plate)
    {
        $this->container['plate'] = $plate;

        return $this;
    }

    /**
     * Gets matches_template
     * @return int
     */
    public function getMatchesTemplate()
    {
        return $this->container['matches_template'];
    }

    /**
     * Sets matches_template
     * @param int $matches_template Indicates whether the plate matched a regional text pattern
     * @return $this
     */
    public function setMatchesTemplate($matches_template)
    {
        $this->container['matches_template'] = $matches_template;

        return $this;
    }

    /**
     * Gets requested_topn
     * @return int
     */
    public function getRequestedTopn()
    {
        return $this->container['requested_topn'];
    }

    /**
     * Sets requested_topn
     * @param int $requested_topn The max number of results requested
     * @return $this
     */
    public function setRequestedTopn($requested_topn)
    {
        $this->container['requested_topn'] = $requested_topn;

        return $this;
    }

    /**
     * Gets processing_time_ms
     * @return float
     */
    public function getProcessingTimeMs()
    {
        return $this->container['processing_time_ms'];
    }

    /**
     * Sets processing_time_ms
     * @param float $processing_time_ms Number of milliseconds to process the license plate
     * @return $this
     */
    public function setProcessingTimeMs($processing_time_ms)
    {
        $this->container['processing_time_ms'] = $processing_time_ms;

        return $this;
    }

    /**
     * Gets confidence
     * @return float
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     * @param float $confidence Confidence percentage that the plate number is correct
     * @return $this
     */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region Specified or detected region (e.g., tx for Texas)
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets region_confidence
     * @return float
     */
    public function getRegionConfidence()
    {
        return $this->container['region_confidence'];
    }

    /**
     * Sets region_confidence
     * @param float $region_confidence Confidence percentage that the plate region is correct
     * @return $this
     */
    public function setRegionConfidence($region_confidence)
    {
        $this->container['region_confidence'] = $region_confidence;

        return $this;
    }

    /**
     * Gets coordinates
     * @return \Swagger\Client\Model\Coordinate[]
     */
    public function getCoordinates()
    {
        return $this->container['coordinates'];
    }

    /**
     * Sets coordinates
     * @param \Swagger\Client\Model\Coordinate[] $coordinates The X/Y coordinates of the license plate in the image Four coordinates are provided that form a polygon starting from the top-left and moving clockwise ending in the bottom left
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->container['coordinates'] = $coordinates;

        return $this;
    }

    /**
     * Gets candidates
     * @return \Swagger\Client\Model\PlateCandidate[]
     */
    public function getCandidates()
    {
        return $this->container['candidates'];
    }

    /**
     * Sets candidates
     * @param \Swagger\Client\Model\PlateCandidate[] $candidates All the top N candidates that could be the correct plate number
     * @return $this
     */
    public function setCandidates($candidates)
    {
        $this->container['candidates'] = $candidates;

        return $this;
    }

    /**
     * Gets vehicle_region
     * @return \Swagger\Client\Model\RegionOfInterest
     */
    public function getVehicleRegion()
    {
        return $this->container['vehicle_region'];
    }

    /**
     * Sets vehicle_region
     * @param \Swagger\Client\Model\RegionOfInterest $vehicle_region
     * @return $this
     */
    public function setVehicleRegion($vehicle_region)
    {
        $this->container['vehicle_region'] = $vehicle_region;

        return $this;
    }

    /**
     * Gets vehicle
     * @return \Swagger\Client\Model\VehicleDetails
     */
    public function getVehicle()
    {
        return $this->container['vehicle'];
    }

    /**
     * Sets vehicle
     * @param \Swagger\Client\Model\VehicleDetails $vehicle
     * @return $this
     */
    public function setVehicle($vehicle)
    {
        $this->container['vehicle'] = $vehicle;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


