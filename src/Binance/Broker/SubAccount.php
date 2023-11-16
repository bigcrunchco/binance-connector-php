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
     * Enable Futures for Sub Account
     *
     * POST /sapi/v1/broker/subAccount/futures
     *
     * @param array $options
     */
    public function enableFuturesSubAccount(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/subAccount/futures', $options);
    }

    /**
     * Create Api Key for Sub Account
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
     * Delete Sub Account Api Key
     *
     * DELETE /sapi/v1/broker/subAccountApi
     *
     * @param array $options
     */
    public function deleteSubAccountApiKey(array $options = [])
    {
        return $this->signRequest('DELETE', '/sapi/v1/broker/subAccountApi', $options);
    }

    /**
     * Query Sub Account Api Key
     *
     * GET /sapi/v1/broker/subAccountApi
     *
     * @param array $options
     */
    public function querySubAccountApiKey(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/subAccountApi', $options);
    }

    /**
     * Change Sub Account Api Permission
     *
     * POST /sapi/v1/broker/subAccountApi/permission
     *
     * @param array $options
     */
    public function changeSubAccountApiPermission(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/subAccountApi/permission', $options);
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
     * Change Sub Account Commission
     *
     * POST /sapi/v1/broker/subAccountApi/commission
     *
     * @param string subAccountId
     * @param string makerCommission
     * @param float takerCommission
     * @param float marginMakerCommission
     * @param float marginTakerCommission
     * @param long recvWindow
     * @param long timestamp
     *
     * @param array $options
     */
    public function brokerSubAccountApiCommission(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/subAccountApi/commission', $options);
    }

    /**
     * Change Sub Account USDT-Ⓜ Futures Commission Adjustment
     *
     * POST /sapi/v1/broker/subAccountApi/commission/futures
     *
     * @param string subAccountId
     * @param string symbol
     * @param int makerAdjustment
     * @param int takerAdjustment
     * @param long recvWindow
     * @param long timestamp
     *
     * @param array $options
     */
    public function brokerSubAccountApiCommissionFutures(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/subAccountApi/commission/futures', $options);
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
     * Query Broker Futures Commission Rebate Record
     *
     * GET /sapi/v1/broker/rebate/futures/recentRecord
     *
     * @param string futuresType
     * @param string startTime
     * @param string endTime
     * @param long page
     * @param long size
     * @param long recvWindow
     * @param long timestamp
     *
     *
     * @param array $options
     */
    public function brokerRebateFuturesRecentRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/rebate/futures/recentRecord', $options);
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
