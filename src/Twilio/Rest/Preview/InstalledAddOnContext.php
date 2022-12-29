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

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Serialize;
use Twilio\Rest\Preview\Preview\InstalledAddOn\InstalledAddOnExtensionList;


/**
 * @property InstalledAddOnExtensionList $extensions
 * @method \Twilio\Rest\Preview\Preview\InstalledAddOn\InstalledAddOnExtensionContext extensions(string $sid)
 */

class InstalledAddOnContext extends InstanceContext {
    protected $_extensions;

    /**
     * Initialize the InstalledAddOnContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The SID of the InstalledAddOn resource to delete.
     */
    public function __construct(Version $version, $sid ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['sid' => $sid,  ];

        $this->uri = '/InstalledAddOns/' . \rawurlencode($sid) . '';
    }

    /**
     * Delete the InstalledAddOnInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->version->delete('DELETE', $this->uri);
    }

    /**
     * Fetch the InstalledAddOnInstance
     *
     * @return InstalledAddOnInstance Fetched InstalledAddOnInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): InstalledAddOnInstance {
        $payload = $this->version->fetch('GET', $this->uri);

        return new InstalledAddOnInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Update the InstalledAddOnInstance
     *
     * @param array|Options $options Optional Arguments
     * @return InstalledAddOnInstance Updated InstalledAddOnInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): InstalledAddOnInstance {
        $options = new Values($options);

        $data = Values::of([
            'Configuration' => Serialize::jsonObject($options['configuration']),
            'UniqueName' => $options['uniqueName'],
        ]);

        $payload = $this->version->update('POST', $this->uri, [], $data);

        return new InstalledAddOnInstance(
            $this->version,
            $payload
            , $this->solution['sid']
        );
    }

    /**
     * Access the extensions
     */
    protected function getExtensions(): InstalledAddOnExtensionList {
        if (!$this->_extensions) {
            $this->_extensions = new InstalledAddOnExtensionList(
                $this->version
                , $this->solution['sid']
            );
        }

        return $this->_extensions;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name): ListResource {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.Preview.InstalledAddOnContext ' . \implode(' ', $context) . ']';
    }
}
