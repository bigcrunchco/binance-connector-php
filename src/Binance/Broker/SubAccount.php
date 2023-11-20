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
     * @param array $options
     */
    public function changeSubAccountCommissionFutures(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/subAccountApi/commission/futures', $options);
    }

    /**
     * Query Sub Account USDT-Ⓜ Futures Commission Adjustment
     *
     * GET /sapi/v1/broker/subAccountApi/commission/futures
     *
     * @param array $options
     */
    public function querySubAccountCommissionFutures(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/subAccountApi/commission/futures', $options);
    }

    /**
     * Change Sub Account COIN-Ⓜ Futures Commission Adjustment
     *
     * GET /sapi/v1/broker/subAccountApi/commission/futures
     *
     * @param array $options
     */
    public function querySubAccountCommissionCoinFutures(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/subAccountApi/commission/coinFutures', $options);
    }

    /**
     * Query Sub Account COIN-Ⓜ Futures Commission Adjustment
     *
     * GET /sapi/v1/broker/subAccountApi/commission/coinFutures
     *
     * @param array $options
     */
    public function changeSubAccountCommissionCoinFutures(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/subAccountApi/commission/coinFutures', $options);
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
     * @param array $options
     */
    public function subAccountInfo(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/info', $options);
    }

    /**
     * Query Broker Commission Rebate Recent Record（Spot）
     *
     * GET /sapi/v1/broker/rebate/recentRecord
     *
     * @param array $options
     */
    public function brokerCommissionRebateRecentRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/rebate/recentRecord', $options);
    }

    /**
     * Enable Or Disable BNB Burn for Sub Account SPOT and MARGIN
     *
     * POST /sapi/v1/broker/subAccount/bnbBurn/spot
     *
     * @param array $options
     */
    public function brokerEnableDisableBNBBurnSubAccount(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/subAccount/bnbBurn/spot', $options);
    }

    /**
     * Enable Or Disable BNB Burn for Sub Account Margin Interest
     *
     * POST /sapi/v1/broker/subAccount/bnbBurn/marginInterest
     *
     * @param array $options
     */
    public function brokerSubAccountBnbBurnMarginInterest(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/subAccount/bnbBurn/marginInterest', $options);
    }

    /**
     * Get BNB Burn Status for Sub Account
     *
     * GET /sapi/v1/broker/subAccount/bnbBurn/status
     *
     * @param array $options
     */
    public function brokerSubAccountBnbBurnStatus(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/subAccount/bnbBurn/status', $options);
    }

    /**
     * Get Sub Account Deposit History
     *
     * GET /sapi/v1/broker/subAccount/depositHist
     *
     * @param array $options
     */
    public function brokerSubAccountDepositHist(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/subAccount/depositHist', $options);
    }

    /**
     * Query Sub Account Spot Asset info
     *
     * GET /sapi/v1/broker/subAccount/spotSummary
     *
     * @param array $options
     */
    public function brokerSubAccountSpotSummary(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/subAccount/spotSummary', $options);
    }

    /**
     * Query Subaccount Margin Asset info
     *
     * GET /sapi/v1/broker/subAccount/marginSummary
     *
     * @param array $options
     */
    public function brokerSubAccountMarginSummary(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/subAccount/marginSummary', $options);
    }

    /**
     * Query Subaccount Futures Asset info
     *
     * GET /sapi/v1/broker/subAccount/futuresSummary
     *
     * @param array $options
     */
    public function brokerSubAccountFuturesSummaryV1(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/subAccount/futuresSummary', $options);
    }

    /**
     * Query Subaccount Futures Asset info (V2)
     *
     * GET /sapi/v2/broker/subAccount/futuresSummary
     *
     * @param array $options
     */
    public function brokerSubAccountFuturesSummaryV2(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v2/broker/subAccount/futuresSummary', $options);
    }

    /**
     * Enable Leverage Token for Sub Account
     *
     * POST /sapi/v1/broker/subAccount/blvt
     *
     * @param array $options
     */
    public function brokerSubAccountBlvt(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/broker/subAccount/blvt', $options);
    }

    /**
     * Query Broker Futures Commission Rebate Record
     *
     * GET /sapi/v1/broker/rebate/futures/recentRecord
     *
     * @param array $options
     */
    public function brokerRebateFuturesRecentRecord(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/rebate/futures/recentRecord', $options);
    }

    /**
     * Get IP Restriction for Sub Account Api Key
     *
     * GET /sapi/v1/broker/subAccountApi/ipRestriction
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
     * DELETE /sapi/v1/broker/subAccountApi/ipRestriction/ipList
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
     * @param array $options
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
     * @param array $options
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
     * @param array $options
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
     * @param array $options
     */
    public function updateIPRestriction(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v2/broker/subAccountApi/ipRestriction', $options);
    }



    
}
