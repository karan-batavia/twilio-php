<?php
/*
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Preview\Preview;

use Twilio\Options;
use Twilio\Values;


abstract class CommandOptions {
    /**
    * @param string $device  
    * @param string $sim  
    * @param string $callbackMethod  
    * @param string $callbackUrl  
    * @param string $commandMode  
    * @param string $includeSid  
    * @return CreateCommandOptions Options builder
    */
    public static function create(string  $device=Values::NONE,string  $sim=Values::NONE,string  $callbackMethod=Values::NONE,string  $callbackUrl=Values::NONE,string  $commandMode=Values::NONE,string  $includeSid=Values::NONE): CreateCommandOptions {
        return new CreateCommandOptions($device,$sim,$callbackMethod,$callbackUrl,$commandMode,$includeSid);
    }


    /**
    * @param string $device  
    * @param string $sim  
    * @param string $status  
    * @param string $direction  
    * @return ReadCommandOptions Options builder
    */
    public static function read(string  $device=Values::NONE,string  $sim=Values::NONE,string  $status=Values::NONE,string  $direction=Values::NONE): ReadCommandOptions {
        return new ReadCommandOptions($device,$sim,$status,$direction);
    }

}

class CreateCommandOptions extends Options {
    /**
    * @param string $device 
    * @param string $sim 
    * @param string $callbackMethod 
    * @param string $callbackUrl 
    * @param string $commandMode 
    * @param string $includeSid 
    */
    public function __construct(string  $device=Values::NONE,string  $sim=Values::NONE,string  $callbackMethod=Values::NONE,string  $callbackUrl=Values::NONE,string  $commandMode=Values::NONE,string  $includeSid=Values::NONE) {
        $this->options['device'] = $device;
        $this->options['sim'] = $sim;
        $this->options['callbackMethod'] = $callbackMethod;
        $this->options['callbackUrl'] = $callbackUrl;
        $this->options['commandMode'] = $commandMode;
        $this->options['includeSid'] = $includeSid;
    }

    /**
    * @param string $device 
    * @return $this Fluent Builder
    */
    public function setDevice(string $device): self {
        $this->options['device'] = $device;
        return $this;
    }
    /**
    * @param string $sim 
    * @return $this Fluent Builder
    */
    public function setSim(string $sim): self {
        $this->options['sim'] = $sim;
        return $this;
    }
    /**
    * @param string $callbackMethod 
    * @return $this Fluent Builder
    */
    public function setCallbackMethod(string $callbackMethod): self {
        $this->options['callbackMethod'] = $callbackMethod;
        return $this;
    }
    /**
    * @param string $callbackUrl 
    * @return $this Fluent Builder
    */
    public function setCallbackUrl(string $callbackUrl): self {
        $this->options['callbackUrl'] = $callbackUrl;
        return $this;
    }
    /**
    * @param string $commandMode 
    * @return $this Fluent Builder
    */
    public function setCommandMode(string $commandMode): self {
        $this->options['commandMode'] = $commandMode;
        return $this;
    }
    /**
    * @param string $includeSid 
    * @return $this Fluent Builder
    */
    public function setIncludeSid(string $includeSid): self {
        $this->options['includeSid'] = $includeSid;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Preview.Preview.CreateCommandOptions ' . $options . ']';
    }
}


class ReadCommandOptions extends Options {
    /**
    * @param string $device 
    * @param string $sim 
    * @param string $status 
    * @param string $direction 
    */
    public function __construct(string  $device=Values::NONE,string  $sim=Values::NONE,string  $status=Values::NONE,string  $direction=Values::NONE) {
        $this->options['device'] = $device;
        $this->options['sim'] = $sim;
        $this->options['status'] = $status;
        $this->options['direction'] = $direction;
    }

    /**
    * @param string $device 
    * @return $this Fluent Builder
    */
    public function setDevice(string $device): self {
        $this->options['device'] = $device;
        return $this;
    }
    /**
    * @param string $sim 
    * @return $this Fluent Builder
    */
    public function setSim(string $sim): self {
        $this->options['sim'] = $sim;
        return $this;
    }
    /**
    * @param string $status 
    * @return $this Fluent Builder
    */
    public function setStatus(string $status): self {
        $this->options['status'] = $status;
        return $this;
    }
    /**
    * @param string $direction 
    * @return $this Fluent Builder
    */
    public function setDirection(string $direction): self {
        $this->options['direction'] = $direction;
        return $this;
    }

    /**
    * Provide a friendly representation
    *
    * @return string Machine friendly representation
    */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Preview.Preview.ReadCommandOptions ' . $options . ']';
    }
}

