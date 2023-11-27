<?php

namespace Binance\Broker;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait SubAccount
{
    /**
     * Create a Sub Account
     *
     * POST /sapi/v1/broker/subAccount
     *
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
     * @param string $subAccountId
     * @param string $futures
     * @param array $options
     */
    public function enableFuturesSubAccount(string  $subAccountId, string  $futures, array $options = [])
    {
        if (Strings::isEmpty($subAccountId)) {
            throw new MissingArgumentException('subAccountId');
        }
        if (Strings::isEmpty($futures)) {
            throw new MissingArgumentException('futures');
        }

        return $this->signRequest('POST', '/sapi/v1/broker/subAccount/futures', array_merge(
            $options,
            [
                'subAccountId' => $subAccountId,
                'futures' => $futures
            ]
        ));
    }

    /**
     * Create Api Key for Sub Account
     *
     * POST /sapi/v1/broker/subAccountApi
     *
     * @param string $subAccountId
     * @param string $canTrade
     * @param array $options
     */
    public function subAccountApi(string $subAccountId, string $canTrade, array $options = [])
    {
        if (Strings::isEmpty($subAccountId)) {
            throw new MissingArgumentException('subAccountId');
        }
        if (Strings::isEmpty($canTrade)) {
            throw new MissingArgumentException('canTrade');
        }

        return $this->signRequest('POST', '/sapi/v1/broker/subAccountApi', array_merge(
            $options,
            [
                'subAccountId' => $subAccountId,
                'canTrade' => $canTrade
            ]
        ));
    }

    /**
     * Delete Sub Account Api Key
     *
     * DELETE /sapi/v1/broker/subAccountApi
     *
     * @param string $subAccountId
     * @param string $subAccountApiKey
     * @param array $options
     */
    public function deleteSubAccountApiKey(string $subAccountId, string $subAccountApiKey, array $options = [])
    {
        if (Strings::isEmpty($subAccountId)) {
            throw new MissingArgumentException('subAccountId');
        }
        if (Strings::isEmpty($subAccountApiKey)) {
            throw new MissingArgumentException('subAccountApiKey');
        }

        return $this->signRequest('DELETE', '/sapi/v1/broker/subAccountApi', array_merge(
            $options,
            [
                'subAccountId' => $subAccountId,
                'subAccountApiKey' => $subAccountApiKey
            ]
        ));
    }

    /**
     * Query Sub Account Api Key
     *
     * GET /sapi/v1/broker/subAccountApi
     *
     * @param string $subAccountId
     * @param string $subAccountApiKey
     * @param array $options
     */
    public function querySubAccountApiKey(string $subAccountId, string $subAccountApiKey, array $options = [])
    {
        if (Strings::isEmpty($subAccountId)) {
            throw new MissingArgumentException('subAccountId');
        }
        if (Strings::isEmpty($subAccountApiKey)) {
            throw new MissingArgumentException('subAccountApiKey');
        }

        return $this->signRequest('GET', '/sapi/v1/broker/subAccountApi', array_merge(
            $options,
            [
                'subAccountId' => $subAccountId,
                'subAccountApiKey' => $subAccountApiKey
            ]
        ));
    }

    /**
     * Change Sub Account Api Permission
     *
     * POST /sapi/v1/broker/subAccountApi/permission
     *
     * @param string $subAccountId
     * @param string $subAccountApiKey
     * @param string $canTrade
     * @param string $marginTrade
     * @param string $futuresTrade
     * @param array $options
     */
    public function changeSubAccountApiPermission(string $subAccountId, string $subAccountApiKey, string $canTrade, string $marginTrade, string $futuresTrade, array $options = [])
    {
        if (Strings::isEmpty($subAccountId)) {
            throw new MissingArgumentException('subAccountId');
        }
        if (Strings::isEmpty($subAccountApiKey)) {
            throw new MissingArgumentException('subAccountApiKey');
        }
        if (Strings::isEmpty($canTrade)) {
            throw new MissingArgumentException('canTrade');
        }
        if (Strings::isEmpty($marginTrade)) {
            throw new MissingArgumentException('marginTrade');
        }
        if (Strings::isEmpty($futuresTrade)) {
            throw new MissingArgumentException('futuresTrade');
        }

        return $this->signRequest('POST', '/sapi/v1/broker/subAccountApi/permission', array_merge(
            $options,
            [
                'subAccountId' => $subAccountId,
                'subAccountApiKey' => $subAccountApiKey,
                'canTrade' => $canTrade,
                'marginTrade' => $marginTrade,
                'futuresTrade' => $futuresTrade,
            ]
        ));
    }

    /**
     * Query Sub Account
     *
     * GET /sapi/v1/broker/subAccount
     *
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
     * @param string $subAccountId
     * @param mixed $makerCommission
     * @param mixed $takerCommission
     * @param array $options
     */
    public function brokerSubAccountApiCommission(string $subAccountId, $makerCommission, $takerCommission, array $options = [])
    {
        if (Strings::isEmpty($subAccountId)) {
            throw new MissingArgumentException('subAccountId');
        }

        return $this->signRequest('POST', '/sapi/v1/broker/subAccountApi/commission', array_merge(
            $options,
            [
                'subAccountId' => $subAccountId,
                'makerCommission' => $makerCommission,
                'takerCommission' => $takerCommission,
            ]
        ));
    }

    /**
     * Change Sub Account USDT-Ⓜ Futures Commission Adjustment
     *
     * POST /sapi/v1/broker/subAccountApi/commission/futures
     *
     * @param string $subAccountId
     * @param string $symbol
     * @param int $makerAdjustment
     * @param int $takerAdjustment
     * @param array $options
     */
    public function changeSubAccountCommissionFutures(string $subAccountId, string $symbol, int $makerAdjustment, int  $takerAdjustment, array $options = [])
    {
        if (Strings::isEmpty($subAccountId)) {
            throw new MissingArgumentException('subAccountId');
        }
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->signRequest('POST', '/sapi/v1/broker/subAccountApi/commission/futures', array_merge(
            $options,
            [
                'subAccountId' => $subAccountId,
                'symbol' => $symbol,
                'makerAdjustment' => $makerAdjustment,
                'takerAdjustment' => $takerAdjustment,
            ]
        ));

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
     * Query Sub Account Transfer History（SPOT）
     *
     * GET /sapi/v1/broker/transfer
     *
     * @param array $options
     */
    public function querySubAccountTransferHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/transfer', $options);
    }

    /**
     * Query Sub Account Transfer History（FUTURES）
     *
     * GET /sapi/v1/broker/transfer/futures
     *
     * @param array $options
     */
    public function brokerQuerySubAccountTransferHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/broker/transfer/futures', $options);
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
