<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsMobileMSI File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* WindowsMobileMSI class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsMobileMSI extends MobileLobApp
{
    /**
    * Gets the commandLine
    * The command line.
    *
    * @return string The commandLine
    */
    public function getCommandLine()
    {
        if (array_key_exists("commandLine", $this->_propDict)) {
            return $this->_propDict["commandLine"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the commandLine
    * The command line.
    *
    * @param string $val The commandLine
    *
    * @return WindowsMobileMSI
    */
    public function setCommandLine($val)
    {
        $this->_propDict["commandLine"] = $val;
        return $this;
    }
    
    /**
    * Gets the productCode
    * The product code.
    *
    * @return string The productCode
    */
    public function getProductCode()
    {
        if (array_key_exists("productCode", $this->_propDict)) {
            return $this->_propDict["productCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the productCode
    * The product code.
    *
    * @param string $val The productCode
    *
    * @return WindowsMobileMSI
    */
    public function setProductCode($val)
    {
        $this->_propDict["productCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the productVersion
    * The product version of Windows Mobile MSI Line of Business (LoB) app.
    *
    * @return string The productVersion
    */
    public function getProductVersion()
    {
        if (array_key_exists("productVersion", $this->_propDict)) {
            return $this->_propDict["productVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the productVersion
    * The product version of Windows Mobile MSI Line of Business (LoB) app.
    *
    * @param string $val The productVersion
    *
    * @return WindowsMobileMSI
    */
    public function setProductVersion($val)
    {
        $this->_propDict["productVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the ignoreVersionDetection
    * A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for Windows Mobile MSI Line of Business (LoB) apps that use a self update feature.
    *
    * @return bool The ignoreVersionDetection
    */
    public function getIgnoreVersionDetection()
    {
        if (array_key_exists("ignoreVersionDetection", $this->_propDict)) {
            return $this->_propDict["ignoreVersionDetection"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ignoreVersionDetection
    * A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for Windows Mobile MSI Line of Business (LoB) apps that use a self update feature.
    *
    * @param bool $val The ignoreVersionDetection
    *
    * @return WindowsMobileMSI
    */
    public function setIgnoreVersionDetection($val)
    {
        $this->_propDict["ignoreVersionDetection"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the identityVersion
    *
    * @return string The identityVersion
    */
    public function getIdentityVersion()
    {
        if (array_key_exists("identityVersion", $this->_propDict)) {
            return $this->_propDict["identityVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identityVersion
    *
    * @param string $val The identityVersion
    *
    * @return WindowsMobileMSI
    */
    public function setIdentityVersion($val)
    {
        $this->_propDict["identityVersion"] = $val;
        return $this;
    }
    
}