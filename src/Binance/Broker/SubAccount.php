<?php

namespace Binance\Broker;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait SubAccount
{
    /**
     * Create a Broker Sub-account (For Master Account)
     *
     * POST /sapi/v1/broker/subAccount
     *
     * - This request will generate a virtual sub account under your master account.
     * - You need to enable "trade" option for the api key which requests this endpoint.
     *
     * Weight(IP): 1
     *
     * @param string $subAccountString
     * @param array $options
     */
    public function subAccountCreate(array $options = [])
    {

        return $this->signRequest('POST', '/sapi/v1/broker/subAccount', $options);
    }

    /**
     * Query Sub-account List (For Master Account)
     *
     * GET /sapi/v1/broker/subAccount
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function subAccountList(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/subAccount', $options);
    }

    
    public function subAccountApi(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/subAccountApi', $options);
    }

    public function subAccountTransfer(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/transfer', $options);
    }


    /**
     * Broker Account Information
     *
     * GET /sapi/v1/broker/info
     *
     */
    public function subAccountInfo(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/info', $options);
    }


    /**
     * Query Universal Transfer History
     *
     * GET /sapi/v1/broker/universalTransfer
     *
     */
    public function universalTransferHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/universalTransfer', $options);
    }

    /**
     * Enable Universal Transfer Permission For Sub Account Api Key
     *
     * POST /sapi/v1/broker/subAccountApi/permission/universalTransfer
     *
     */
    public function enableUniversalTransferPermission(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/subAccountApi/permission/universalTransfer', $options);
    }



    /**
     * Update IP Restriction for Sub-Account API key (For Master Account)
     *
     * POST /sapi/v2/broker/subAccountApi/ipRestriction (HMAC SHA256)
     *
     */
    public function updateIPRestriction(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v2/broker/subAccountApi/ipRestriction', $options);
    }



    
}
