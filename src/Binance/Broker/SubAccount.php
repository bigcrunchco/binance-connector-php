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

    /**
     * Sub-account API
     *
     * POST /sapi/v1/broker/subAccountApi
     *
     * @param array $options
     */
    public function subAccountApi(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/subAccountApi', $options);
    }

    /**
     * Sub-account Transfer
     *
     * POST /sapi/v1/broker/transfer
     *
     * @param array $options
     */
    public function subAccountTransfer(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/transfer', $options);
    }

    /**
     * Sub-account Deposit History
     *
     * GET /sapi/v1/broker/subAccount/depositHist
     *
     * @param array $options
     */
    public function subAccountDepositHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/subAccount/depositHist', $options);
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
     * Get IP Restriction for Sub Account Api Key
     *
     * GET /sapi/v1/broker/subAccountApi/ipRestriction
     *
     * @param string subAccountId
     * @param string subAccountApiKey
     * @param long recvWindow
     * @param long timestamp
     *
     * @param array $options
     */
    public function getIPRestrictionSubAccount(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/subAccountApi/ipRestriction', $options);
    }

    /**
     * Delete IP Restriction for Sub Account Api Key
     *
     * POST /sapi/v1/broker/subAccountApi/ipRestriction/ipList
     *
     * @param string subAccountId
     * @param string subAccountApiKey
     * @param string ipAddress
     * @param long recvWindow
     * @param long timestamp
     *
     *
     * @param array $options
     */
    public function deleteIPRestrictionSubAccount(array $options = [])
    {
        return $this->signRequest('DELETE', '/sapi/v1/broker/subAccountApi/ipRestriction/ipList', $options);
    }


    /**
     * Universal Transfer
     *
     * POST /sapi/v1/broker/universalTransfer
     *
     */
    public function universalTransfer(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/universalTransfer', $options);
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
