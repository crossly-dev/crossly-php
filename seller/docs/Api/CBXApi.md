# Crossly\CBXApi

All URIs are relative to https://crossly.net/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCbxAccrual()**](CBXApi.md#createCbxAccrual) | **POST** /v1/cbx/accruals | Record cashback a user earned, in cents.
[**createCbxAccrualPurchase()**](CBXApi.md#createCbxAccrualPurchase) | **POST** /v1/cbx/accruals/purchase | Accrue cashback for an order at the resolved rate.
[**createCbxAccrualReverse()**](CBXApi.md#createCbxAccrualReverse) | **POST** /v1/cbx/accruals/{accrualId}/reverse | Claw back a pending accrual — a refund, a cancellation, fraud.
[**createCbxAdCreditPurchase()**](CBXApi.md#createCbxAdCreditPurchase) | **POST** /v1/cbx/ad-credit/purchase | Claim ad credit against a CBX transfer you sent.
[**createCbxAdCreditQuote()**](CBXApi.md#createCbxAdCreditQuote) | **POST** /v1/cbx/ad-credit/quote | What a given number of tokens buys in ad credit.
[**createCbxAdCreditSpend()**](CBXApi.md#createCbxAdCreditSpend) | **POST** /v1/cbx/ad-credit/spend | Consume credit for a billing period.
[**createCbxBoost()**](CBXApi.md#createCbxBoost) | **POST** /v1/cbx/boosts | Fund elevated cashback on matching items.
[**createCbxBoostPause()**](CBXApi.md#createCbxBoostPause) | **POST** /v1/cbx/boosts/{boostId}/pause | Stop a boost from matching further orders.
[**createCbxCampaign()**](CBXApi.md#createCbxCampaign) | **POST** /v1/cbx/campaigns | Create a campaign in draft.
[**createCbxCampaignApprove()**](CBXApi.md#createCbxCampaignApprove) | **POST** /v1/cbx/campaigns/{campaignId}/approve | Approve the previewed recipient list.
[**createCbxCampaignExecute()**](CBXApi.md#createCbxCampaignExecute) | **POST** /v1/cbx/campaigns/{campaignId}/execute | Pay an approved campaign.
[**createCbxCampaignPreview()**](CBXApi.md#createCbxCampaignPreview) | **POST** /v1/cbx/campaigns/{campaignId}/preview | Compute the recipient list without paying it.
[**createCbxClaim()**](CBXApi.md#createCbxClaim) | **POST** /v1/cbx/claims | Reserve a claim. Debits the balance and queues the transfer.
[**createCbxClaimQuote()**](CBXApi.md#createCbxClaimQuote) | **POST** /v1/cbx/claims/quote | What a claim would cost, without committing to it.
[**createCbxClaimSend()**](CBXApi.md#createCbxClaimSend) | **POST** /v1/cbx/claims/{claimId}/send | Send a reserved claim on chain.
[**createCbxCreditDraw()**](CBXApi.md#createCbxCreditDraw) | **POST** /v1/cbx/credit/draw | Draw against a line, receiving grant credit.
[**createCbxCreditFreeze()**](CBXApi.md#createCbxCreditFreeze) | **POST** /v1/cbx/credit/freeze | Stop new draws. Leaves the drawn balance on its terms.
[**createCbxCreditRefresh()**](CBXApi.md#createCbxCreditRefresh) | **POST** /v1/cbx/credit/refresh | Recompute a limit from trading history and stake.
[**createCbxCreditRepay()**](CBXApi.md#createCbxCreditRepay) | **POST** /v1/cbx/credit/repay | Apply a repayment to a line.
[**createCbxDisbursementRule()**](CBXApi.md#createCbxDisbursementRule) | **POST** /v1/cbx/disbursement-rules | Fire a distribution when the events pool crosses a threshold.
[**createCbxDisbursementRuleActive()**](CBXApi.md#createCbxDisbursementRuleActive) | **POST** /v1/cbx/disbursement-rules/{ruleId}/active | Enable or disable a rule.
[**createCbxDisbursementRuleCheck()**](CBXApi.md#createCbxDisbursementRuleCheck) | **POST** /v1/cbx/disbursement-rules/{ruleId}/check | Evaluate a rule now. Fires it if every gate passes.
[**createCbxEarnTier()**](CBXApi.md#createCbxEarnTier) | **POST** /v1/cbx/earn-tiers | Define an earn term.
[**createCbxRateQuote()**](CBXApi.md#createCbxRateQuote) | **POST** /v1/cbx/rates/quote | What would this order earn, and why.
[**createCbxRedemption()**](CBXApi.md#createCbxRedemption) | **POST** /v1/cbx/redemptions | Pay for a service in CBX.
[**createCbxRedemptionQuote()**](CBXApi.md#createCbxRedemptionQuote) | **POST** /v1/cbx/redemptions/quote | What a service costs in tokens right now.
[**createCbxRevenueSweep()**](CBXApi.md#createCbxRevenueSweep) | **POST** /v1/cbx/revenue/sweep | Move accrued revenue from the reserve to your revenue wallet.
[**createCbxSpend()**](CBXApi.md#createCbxSpend) | **POST** /v1/cbx/spends | Redeem a user&#39;s CBX against an order.
[**createCbxSpendReverse()**](CBXApi.md#createCbxSpendReverse) | **POST** /v1/cbx/spends/{externalId}/reverse | Refund a spend — give the tokens back and claw the skim back.
[**createCbxStakeTier()**](CBXApi.md#createCbxStakeTier) | **POST** /v1/cbx/stake-tiers | Define a staking tier.
[**createCbxSubject()**](CBXApi.md#createCbxSubject) | **POST** /v1/cbx/subjects | Map one of your user ids to a CBX subject.
[**createCbxSubjectGrant()**](CBXApi.md#createCbxSubjectGrant) | **POST** /v1/cbx/subjects/{subjectId}/grants | Issue grant credit — in-platform, non-withdrawable.
[**createCbxSubjectSpendPlan()**](CBXApi.md#createCbxSubjectSpendPlan) | **POST** /v1/cbx/subjects/{subjectId}/spend-plan | Which balances would pay for a spend, and in what order.
[**createCbxSubjectStake()**](CBXApi.md#createCbxSubjectStake) | **POST** /v1/cbx/subjects/{subjectId}/stake | Lock a subject&#39;s tokens for a tier.
[**createCbxSubjectStakeUnstake()**](CBXApi.md#createCbxSubjectStakeUnstake) | **POST** /v1/cbx/subjects/{subjectId}/stake/unstake | Start the cooldown. Tokens unlock when it elapses.
[**createCbxWalletChallenge()**](CBXApi.md#createCbxWalletChallenge) | **POST** /v1/cbx/wallets/challenge | Start wallet verification. Returns a message for the user to sign.
[**createCbxWalletPaymentConfirm()**](CBXApi.md#createCbxWalletPaymentConfirm) | **POST** /v1/cbx/wallet-payments/confirm | Present the signature. Returns a ship / do-not-ship decision.
[**createCbxWalletPaymentQuote()**](CBXApi.md#createCbxWalletPaymentQuote) | **POST** /v1/cbx/wallet-payments/quote | Build a transfer for the buyer to sign themselves.
[**createCbxWalletPaymentResolve()**](CBXApi.md#createCbxWalletPaymentResolve) | **POST** /v1/cbx/wallet-payments/{paymentId}/resolve | A human decides on a held payment.
[**createCbxWalletVerify()**](CBXApi.md#createCbxWalletVerify) | **POST** /v1/cbx/wallets/verify | Complete wallet verification with the user&#39;s signature.
[**getCbxAdCredit()**](CBXApi.md#getCbxAdCredit) | **GET** /v1/cbx/ad-credit | Unspent advertising credit, in cents.
[**getCbxClaim()**](CBXApi.md#getCbxClaim) | **GET** /v1/cbx/claims/{claimId} | A claim&#39;s current state.
[**getCbxCredit()**](CBXApi.md#getCbxCredit) | **GET** /v1/cbx/credit | A seller&#39;s wholesale credit line.
[**getCbxMe()**](CBXApi.md#getCbxMe) | **GET** /v1/cbx/me | Identity check — which merchant this key belongs to, and its terms.
[**getCbxPool()**](CBXApi.md#getCbxPool) | **GET** /v1/cbx/pool | Your events-pool balance.
[**getCbxRevenue()**](CBXApi.md#getCbxRevenue) | **GET** /v1/cbx/revenue | Operator revenue accrued and not yet withdrawn.
[**getCbxSubjectBalance()**](CBXApi.md#getCbxSubjectBalance) | **GET** /v1/cbx/subjects/{subjectId}/balance | What a subject holds: pending cents and available CBX.
[**getCbxSubjectBalanceBySubjectId()**](CBXApi.md#getCbxSubjectBalanceBySubjectId) | **GET** /v1/cbx/subjects/{subjectId}/balances | All three balances a subject holds.
[**getCbxSubjectSpent()**](CBXApi.md#getCbxSubjectSpent) | **GET** /v1/cbx/subjects/{subjectId}/spent | Total CBX a subject has spent in your marketplace.
[**getCbxSubjectStake()**](CBXApi.md#getCbxSubjectStake) | **GET** /v1/cbx/subjects/{subjectId}/stake | A subject&#39;s staking state and spendable balance.
[**getCbxSubjectWallet()**](CBXApi.md#getCbxSubjectWallet) | **GET** /v1/cbx/subjects/{subjectId}/wallet | The verified payout address for a subject, if any.
[**getCbxTreasury()**](CBXApi.md#getCbxTreasury) | **GET** /v1/cbx/treasury | Your most recent reserve reconciliation.
[**listCbxAdCreditLedger()**](CBXApi.md#listCbxAdCreditLedger) | **GET** /v1/cbx/ad-credit/ledger | Ad-credit movements, newest first.
[**listCbxBoosts()**](CBXApi.md#listCbxBoosts) | **GET** /v1/cbx/boosts | Your funded cashback boosts, newest first.
[**listCbxCampaignPayouts()**](CBXApi.md#listCbxCampaignPayouts) | **GET** /v1/cbx/campaigns/{campaignId}/payouts | What a campaign actually paid, with the weight behind each amount.
[**listCbxCampaigns()**](CBXApi.md#listCbxCampaigns) | **GET** /v1/cbx/campaigns | Your campaigns, newest first.
[**listCbxDisbursementProgress()**](CBXApi.md#listCbxDisbursementProgress) | **GET** /v1/cbx/disbursement-progress | How close each rule is to firing — the public counter.
[**listCbxDisbursementRules()**](CBXApi.md#listCbxDisbursementRules) | **GET** /v1/cbx/disbursement-rules | Threshold rules that fire community distributions.
[**listCbxEarnTiers()**](CBXApi.md#listCbxEarnTiers) | **GET** /v1/cbx/earn-tiers | Earn terms on offer — longer maturation, higher rate.
[**listCbxRedemptionServices()**](CBXApi.md#listCbxRedemptionServices) | **GET** /v1/cbx/redemptions/services | Services payable in CBX, and the discount each carries.
[**listCbxStakeTiers()**](CBXApi.md#listCbxStakeTiers) | **GET** /v1/cbx/stake-tiers | Staking tiers — what locking tokens buys.
[**listCbxSubjectGrants()**](CBXApi.md#listCbxSubjectGrants) | **GET** /v1/cbx/subjects/{subjectId}/grants | Live grants, soonest-expiring first.
[**listCbxSubjectLedger()**](CBXApi.md#listCbxSubjectLedger) | **GET** /v1/cbx/subjects/{subjectId}/ledger | A subject&#39;s CBX ledger, newest first.
[**listCbxWalletPaymentReview()**](CBXApi.md#listCbxWalletPaymentReview) | **GET** /v1/cbx/wallet-payments/review | Payments held for a human — the ops queue.


## `createCbxAccrual()`

```php
createCbxAccrual(): \Crossly\Model\CreateCbxAccrualResponse
```

Record cashback a user earned, in cents.

The accrual is PENDING until its maturation window closes, then converts to CBX at that moment's market price. It is denominated in cents the whole time it is pending, deliberately: quoting a token quantity up front and buying later would leave the reserve short for the length of the window. Send sourceExternalId and a retry is a no-op rather than a double credit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxAccrual();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxAccrual: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxAccrualResponse**](../Model/CreateCbxAccrualResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxAccrualPurchase()`

```php
createCbxAccrualPurchase(): \Crossly\Model\CreateCbxAccrualPurchaseResponse
```

Accrue cashback for an order at the resolved rate.

Prefer this over POST /accruals when you want us to do the rate maths — it resolves the tier, the boost and the stake boost, charges your boost budget in the same transaction, and records what rate was actually granted. If a matching boost cannot fund the order, the accrual falls back to your un-boosted rate and `boostBudgetExhausted` is true. Idempotent on externalId: a retried webhook neither accrues twice nor charges your budget twice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxAccrualPurchase();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxAccrualPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxAccrualPurchaseResponse**](../Model/CreateCbxAccrualPurchaseResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxAccrualReverse()`

```php
createCbxAccrualReverse($accrual_id): \Crossly\Model\CreateCbxAccrualReverseResponse
```

Claw back a pending accrual — a refund, a cancellation, fraud.

Only works while the accrual is still pending. Once it has converted, the value is tokens in somebody's balance and this is the wrong operation: reversing then is a debit against that balance, which is a different act with different consequences and is not something an integration key can do. This is why the maturation window has to be at least as long as your refund window.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accrual_id = 'accrual_id_example'; // string

try {
    $result = $apiInstance->createCbxAccrualReverse($accrual_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxAccrualReverse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accrual_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxAccrualReverseResponse**](../Model/CreateCbxAccrualReverseResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxAdCreditPurchase()`

```php
createCbxAdCreditPurchase(): \Crossly\Model\CreateCbxAdCreditPurchaseResponse
```

Claim ad credit against a CBX transfer you sent.

Send CBX to our revenue wallet yourself, then present the signature. We read the actual balance delta at FINALIZED commitment — a confirmed transaction can still be dropped by a fork, and this grants real credit. One signature can be claimed exactly once. Priced at the spot when the claim is processed, not when you signed: pricing at send time would let somebody hold signed transfers and claim only the ones that moved in their favour. A 409 means the transaction has not finalized yet and you should retry; a 400 means it will never be claimable (failed, wrong mint, wrong destination).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxAdCreditPurchase();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxAdCreditPurchase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxAdCreditPurchaseResponse**](../Model/CreateCbxAdCreditPurchaseResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxAdCreditQuote()`

```php
createCbxAdCreditQuote(): \Crossly\Model\CreateCbxAdCreditQuoteResponse
```

What a given number of tokens buys in ad credit.

Credit is 1:1 with the market value of the tokens at confirmation. Refuses with 409 when there is no fresh price — pricing an entire prepaid budget off a guess is not something to do quietly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxAdCreditQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxAdCreditQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxAdCreditQuoteResponse**](../Model/CreateCbxAdCreditQuoteResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxAdCreditSpend()`

```php
createCbxAdCreditSpend(): \Crossly\Model\CreateCbxAdCreditSpendResponse
```

Consume credit for a billing period.

Spends what the balance covers and reports the rest as `shortfallCents` — the campaign should stop there rather than running on credit that does not exist. 20% of what is spent moves to the community events pool and 80% is operator revenue; the split happens on SPEND rather than at purchase, because the pool's share is earned when the advertising is actually delivered. Idempotent on externalId: pass your billing-period id so a retried run does not consume the same credit twice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxAdCreditSpend();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxAdCreditSpend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxAdCreditSpendResponse**](../Model/CreateCbxAdCreditSpendResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxBoost()`

```php
createCbxBoost(): \Crossly\Model\CreateCbxBoostResponse
```

Fund elevated cashback on matching items.

Performance marketing priced in CBX: the spend lands as a durable balance the buyer returns to use, rather than a one-time price cut they pocket. A boost REPLACES the base or tier rate rather than adding to it — you are stating the total you will pay, and it is priced against your margin. Targeting is matched by equality on one facet; most specific wins (sku > collection > category > all). Kinds: all, category, sku, collection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxBoost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxBoost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxBoostResponse**](../Model/CreateCbxBoostResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxBoostPause()`

```php
createCbxBoostPause($boost_id): \Crossly\Model\CreateCbxBoostPauseResponse
```

Stop a boost from matching further orders.

Pausing does not refund anything — already-accrued cashback is a promise already made to a buyer, and unwinding it would take back cashback somebody was shown at checkout. The remaining budget simply stops being spendable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$boost_id = 'boost_id_example'; // string

try {
    $result = $apiInstance->createCbxBoostPause($boost_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxBoostPause: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **boost_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxBoostPauseResponse**](../Model/CreateCbxBoostPauseResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxCampaign()`

```php
createCbxCampaign(): \Crossly\Model\CreateCbxCampaignResponse
```

Create a campaign in draft.

Nothing is paid until it is previewed, approved and executed. Available metrics: accruals_count, accrued_cents, spend_count, spend_base_units — all of them measure activity inside the window. `capPerSubject` is worth setting on a proportional campaign: without it one large participant can take almost the whole pool, which makes the event pointless for everybody else.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxCampaign();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxCampaign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxCampaignResponse**](../Model/CreateCbxCampaignResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxCampaignApprove()`

```php
createCbxCampaignApprove($campaign_id): \Crossly\Model\CreateCbxCampaignApproveResponse
```

Approve the previewed recipient list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->createCbxCampaignApprove($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxCampaignApprove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxCampaignApproveResponse**](../Model/CreateCbxCampaignApproveResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxCampaignExecute()`

```php
createCbxCampaignExecute($campaign_id): \Crossly\Model\CreateCbxCampaignExecuteResponse
```

Pay an approved campaign.

Recomputes the list and refuses if the hash no longer matches the approved one. Payouts credit balances directly rather than transferring on chain, so a distribution to ten thousand recipients costs one internal move and is reversible if it was computed wrong.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->createCbxCampaignExecute($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxCampaignExecute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxCampaignExecuteResponse**](../Model/CreateCbxCampaignExecuteResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxCampaignPreview()`

```php
createCbxCampaignPreview($campaign_id): \Crossly\Model\CreateCbxCampaignPreviewResponse
```

Compute the recipient list without paying it.

Returns every recipient and amount, plus a hash of the list. Re-previewing invalidates any prior approval by design — the approver signed off on a specific list, and if it has changed they have not approved what would now happen.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->createCbxCampaignPreview($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxCampaignPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxCampaignPreviewResponse**](../Model/CreateCbxCampaignPreviewResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxClaim()`

```php
createCbxClaim(): \Crossly\Model\CreateCbxClaimResponse
```

Reserve a claim. Debits the balance and queues the transfer.

The balance is debited here, before anything is sent, which is the only safe order: sending first and debiting after means a crash between the two pays somebody and never charges them, and that is unrecoverable. A crash after this leaves a reserved balance and a pending claim, which is recoverable by looking at the chain. Send the same idempotencyKey to retry safely.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxClaim();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxClaimResponse**](../Model/CreateCbxClaimResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxClaimQuote()`

```php
createCbxClaimQuote(): \Crossly\Model\CreateCbxClaimQuoteResponse
```

What a claim would cost, without committing to it.

Every fee at cost, so a confirm screen can show the breakdown before the user agrees. The network fee is passed through at actual cost and includes the one-time account rent when the recipient has no token account yet — that rent is a recoverable deposit on an account the USER owns, not a fee we keep.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxClaimQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxClaimQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxClaimQuoteResponse**](../Model/CreateCbxClaimQuoteResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxClaimSend()`

```php
createCbxClaimSend($claim_id): \Crossly\Model\CreateCbxClaimSendResponse
```

Send a reserved claim on chain.

Re-checks every precondition rather than trusting the reservation: the delegation may have been revoked, the fee payer may have run dry, the address may have been flagged since. A response of `unconfirmed` means the transfer may have landed but confirmation was not observed — do NOT retry it, it needs reconciliation against the chain first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string

try {
    $result = $apiInstance->createCbxClaimSend($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxClaimSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxClaimSendResponse**](../Model/CreateCbxClaimSendResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxCreditDraw()`

```php
createCbxCreditDraw(): \Crossly\Model\CreateCbxCreditDrawResponse
```

Draw against a line, receiving grant credit.

The advance lands as GRANT balance: in-platform only, so it cannot be withdrawn, cannot be turned into cash and absconded with, and adds nothing to the float that could hit an order book. Restricted to wholesale channels — the limit was sized on the theory that the advance buys goods that get sold and generate the payout stream repaying it, and credit spent on a subscription does not create that stream. Refuses if the reserve has no unallocated tokens: credit is real value and cannot be advanced against tokens that do not exist. Idempotent on externalId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxCreditDraw();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxCreditDraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxCreditDrawResponse**](../Model/CreateCbxCreditDrawResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxCreditFreeze()`

```php
createCbxCreditFreeze(): \Crossly\Model\CreateCbxCreditFreezeResponse
```

Stop new draws. Leaves the drawn balance on its terms.

The only lever over a line, and deliberately the only one. A seller who took inventory on Tuesday keeps Tuesday's terms whatever the token does on Wednesday — the only way a credit product sits next to a volatile asset without transmitting its volatility.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxCreditFreeze();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxCreditFreeze: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxCreditFreezeResponse**](../Model/CreateCbxCreditFreezeResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxCreditRefresh()`

```php
createCbxCreditRefresh(): \Crossly\Model\CreateCbxCreditRefreshResponse
```

Recompute a limit from trading history and stake.

The earned limit is a share of trailing SETTLED payout volume — money that actually reached the seller, not listed inventory or projected sales. The stake bonus is capped at a share of that, so a seller with no history gets nothing however much they stake. A frozen line stays frozen: freezing is a credit decision somebody made, and a recompute must not quietly undo it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxCreditRefresh();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxCreditRefresh: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxCreditRefreshResponse**](../Model/CreateCbxCreditRefreshResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxCreditRepay()`

```php
createCbxCreditRepay(): \Crossly\Model\CreateCbxCreditRepayResponse
```

Apply a repayment to a line.

`treasury` scope, which looks backwards next to a draw needing only `spend` and is deliberate: a forged repayment writes off real money owed to us, while a forged draw hands out credit spendable only in our own marketplace. The scope follows the loss. Clamped to what is outstanding — a payout larger than the debt would otherwise push the balance negative and read as credit nobody underwrote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxCreditRepay();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxCreditRepay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxCreditRepayResponse**](../Model/CreateCbxCreditRepayResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxDisbursementRule()`

```php
createCbxDisbursementRule(): \Crossly\Model\CreateCbxDisbursementRuleResponse
```

Fire a distribution when the events pool crosses a threshold.

Applies to the EVENTS POOL only — never free reserve surplus. Reserve surplus is the recirculation buffer that funds the next accrual without touching the market, so distributing it would force us to buy the same tokens back at spread plus MEV. `checkCadenceHours` bounds how often the rule may fire even when the pool is over the line: a pure threshold fires at an unpredictable moment, and the pool jumps most after a lapse sweep — precisely when engagement was worst. `distributeBps` is capped under 100% because draining the pool removes the standing balance that makes the next event credible. The rule decides WHEN only: firing opens a campaign that still needs preview, approval and execution. Metrics: accruals_count, accrued_cents, spend_count, spend_base_units.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxDisbursementRule();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxDisbursementRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxDisbursementRuleResponse**](../Model/CreateCbxDisbursementRuleResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxDisbursementRuleActive()`

```php
createCbxDisbursementRuleActive($rule_id): \Crossly\Model\CreateCbxDisbursementRuleActiveResponse
```

Enable or disable a rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string

try {
    $result = $apiInstance->createCbxDisbursementRuleActive($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxDisbursementRuleActive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxDisbursementRuleActiveResponse**](../Model/CreateCbxDisbursementRuleActiveResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxDisbursementRuleCheck()`

```php
createCbxDisbursementRuleCheck($rule_id): \Crossly\Model\CreateCbxDisbursementRuleCheckResponse
```

Evaluate a rule now. Fires it if every gate passes.

Gates in order: cadence, threshold, coverage. `outcome` names the one that stopped it — every evaluation is recorded including the declines, because \"why didn't the event happen\" is the question people ask and the answer is always a check that ran and said no. A missing or stale treasury snapshot declines on `coverage`: unknown coverage is not healthy coverage. Send dryRun to evaluate without opening a campaign or writing anything.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rule_id = 'rule_id_example'; // string

try {
    $result = $apiInstance->createCbxDisbursementRuleCheck($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxDisbursementRuleCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxDisbursementRuleCheckResponse**](../Model/CreateCbxDisbursementRuleCheckResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxEarnTier()`

```php
createCbxEarnTier(): \Crossly\Model\CreateCbxEarnTierResponse
```

Define an earn term.

Setting `isDefault` moves the default off whatever held it — exactly one active default per merchant is enforced by a unique index, because two would make \"what rate did this user get\" depend on row order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxEarnTier();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxEarnTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxEarnTierResponse**](../Model/CreateCbxEarnTierResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxRateQuote()`

```php
createCbxRateQuote(): \Crossly\Model\CreateCbxRateQuoteResponse
```

What would this order earn, and why.

Resolve the rate without accruing anything, so a checkout can show the real number and its reason. `source` tells you whether it came from your base rate, a tier, or a boost; `stakeBoostBps` is the part the user's own stake contributed. Quoting does NOT reserve boost budget — a quote and the subsequent accrual can differ if the budget runs out in between, which is why the accrual response repeats the rate it actually granted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxRateQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxRateQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxRateQuoteResponse**](../Model/CreateCbxRateQuoteResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxRedemption()`

```php
createCbxRedemption(): \Crossly\Model\CreateCbxRedemptionResponse
```

Pay for a service in CBX.

Idempotent on (serviceKind, externalId) rather than externalId alone: a grading submission and a listing boost can legitimately share an id because they refer to the same item, and without the service in the key, boosting a listing you had already graded would return the grading receipt and never charge for the boost. Staked tokens cannot pay — the debit checks spendable balance, not total.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxRedemption();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxRedemption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxRedemptionResponse**](../Model/CreateCbxRedemptionResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxRedemptionQuote()`

```php
createCbxRedemptionQuote(): \Crossly\Model\CreateCbxRedemptionQuoteResponse
```

What a service costs in tokens right now.

Refuses with 409 when there is no fresh price. A dollar-priced service has no honest token quantity without a spot, and there is no safe direction to guess in — a guess either overcharges the user or undercharges us.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxRedemptionQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxRedemptionQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxRedemptionQuoteResponse**](../Model/CreateCbxRedemptionQuoteResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxRevenueSweep()`

```php
createCbxRevenueSweep(): \Crossly\Model\CreateCbxRevenueSweepResponse
```

Move accrued revenue from the reserve to your revenue wallet.

Computes what is genuinely free — reserve minus outstanding balances, minus claims in flight, minus the pool, minus unswept revenue — and moves at most that. If the reserve is short it moves NOTHING, whatever the ledger says: an under-covered reserve is not a reason to stop paying users, it is a reason to stop paying yourself. Send dryRun to see the arithmetic without moving tokens.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxRevenueSweep();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxRevenueSweep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxRevenueSweepResponse**](../Model/CreateCbxRevenueSweepResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxSpend()`

```php
createCbxSpend(): \Crossly\Model\CreateCbxSpendResponse
```

Redeem a user's CBX against an order.

Debits the user exactly what they spent — the skim is never added on top, because making CBX worth less when used than when sold would invert the whole reason to spend rather than liquidate. The skim comes out of YOUR fee on the order and is capped against it, so an order paid entirely in saved-up CBX does not have its whole margin eaten. Idempotent on externalId: a retried checkout returns the original spend rather than debiting twice. Spending is always free and has no minimum — that asymmetry against the withdrawal fee is what steers toward spending without ever telling anyone they cannot have their money.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxSpend();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxSpend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxSpendResponse**](../Model/CreateCbxSpendResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxSpendReverse()`

```php
createCbxSpendReverse($external_id): \Crossly\Model\CreateCbxSpendReverseResponse
```

Refund a spend — give the tokens back and claw the skim back.

Returns the user's tokens AND reverses the skim out of both the community pool and operator revenue. All three move together: returning the tokens while the pool and operator kept their shares would count the same tokens twice against one reserve. The spend also stops counting as activity for campaign weighting, so buy-then-refund cannot farm distributions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 'external_id_example'; // string

try {
    $result = $apiInstance->createCbxSpendReverse($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxSpendReverse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxSpendReverseResponse**](../Model/CreateCbxSpendReverseResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxStakeTier()`

```php
createCbxStakeTier(): \Crossly\Model\CreateCbxStakeTierResponse
```

Define a staking tier.

A user gets the highest tier their amount clears. `cooldownDays` is what makes the discount real: without a wait, a user stakes for the discount and unstakes the moment they want to withdraw, so the commitment it was priced against never existed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxStakeTier();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxStakeTier: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxStakeTierResponse**](../Model/CreateCbxStakeTierResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxSubject()`

```php
createCbxSubject(): \Crossly\Model\CreateCbxSubjectResponse
```

Map one of your user ids to a CBX subject.

Idempotent. Call it whenever you need a subject id; repeated calls with the same externalUserId return the same subject. Your user ids are opaque to us and unique only within your merchant, so two marketplaces can both have a user \"1\" without collision.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxSubject();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxSubject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxSubjectResponse**](../Model/CreateCbxSubjectResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxSubjectGrant()`

```php
createCbxSubjectGrant($subject_id): \Crossly\Model\CreateCbxSubjectGrantResponse
```

Issue grant credit — in-platform, non-withdrawable.

Requires a funding `batchId` for every kind except `grant_makegood`. Grant credit is spendable at merchants who receive real value, so the tokens have to exist — the same rule earned balance obeys. A makegood is exempt because compensating somebody for our failure must not be blocked on treasury state. There is no path that converts a grant to earned balance or pays it to an address, and the database enforces that rather than a comment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 'subject_id_example'; // string

try {
    $result = $apiInstance->createCbxSubjectGrant($subject_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxSubjectGrant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxSubjectGrantResponse**](../Model/CreateCbxSubjectGrantResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxSubjectSpendPlan()`

```php
createCbxSubjectSpendPlan($subject_id): \Crossly\Model\CreateCbxSubjectSpendPlanResponse
```

Which balances would pay for a spend, and in what order.

The order is granted → earned → connected and you do not get to choose it. Granted first is a security property, not a preference: if earned spent first, a subject holding both would spend their withdrawable balance down while their non-withdrawable grant sat untouched — converting a grant into a withdrawable balance one purchase at a time. Returns a `shortfallBaseUnits` rather than failing, so a checkout can charge the remainder to a card. Send excludeConnected on a flow that cannot wait for an on-chain transfer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 'subject_id_example'; // string

try {
    $result = $apiInstance->createCbxSubjectSpendPlan($subject_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxSubjectSpendPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxSubjectSpendPlanResponse**](../Model/CreateCbxSubjectSpendPlanResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxSubjectStake()`

```php
createCbxSubjectStake($subject_id): \Crossly\Model\CreateCbxSubjectStakeResponse
```

Lock a subject's tokens for a tier.

Refuses an amount that clears no tier — locking tokens for no benefit is never what somebody meant to do. One stake per subject: to change the amount, unstake and wait out the cooldown first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 'subject_id_example'; // string

try {
    $result = $apiInstance->createCbxSubjectStake($subject_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxSubjectStake: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxSubjectStakeResponse**](../Model/CreateCbxSubjectStakeResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxSubjectStakeUnstake()`

```php
createCbxSubjectStakeUnstake($subject_id): \Crossly\Model\CreateCbxSubjectStakeUnstakeResponse
```

Start the cooldown. Tokens unlock when it elapses.

The earn boost stops immediately; the tokens stay locked until `unlocksAt`. The cooldown is read from the tier as configured NOW, which is the one place a later config change is allowed to matter — holding somebody to a longer wait the merchant has since abandoned would be the worse behaviour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 'subject_id_example'; // string

try {
    $result = $apiInstance->createCbxSubjectStakeUnstake($subject_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxSubjectStakeUnstake: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxSubjectStakeUnstakeResponse**](../Model/CreateCbxSubjectStakeUnstakeResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxWalletChallenge()`

```php
createCbxWalletChallenge(): \Crossly\Model\CreateCbxWalletChallengeResponse
```

Start wallet verification. Returns a message for the user to sign.

Present the returned `message` verbatim to the user's wallet for signing. It binds your merchant, their subject, the address and a single-use nonce, so the resulting signature is not transferable to another address or account. A signature is required because there is no custody here: a send cannot be undone, so a typo or a swapped address is permanent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxWalletChallenge();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxWalletChallenge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxWalletChallengeResponse**](../Model/CreateCbxWalletChallengeResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxWalletPaymentConfirm()`

```php
createCbxWalletPaymentConfirm(): \Crossly\Model\CreateCbxWalletPaymentConfirmResponse
```

Present the signature. Returns a ship / do-not-ship decision.

Everything is read from the CHAIN at finalized commitment — the amount, the payer, the destination. Nothing you assert about the payment is trusted, because a client that can state its own payment amount can state a larger one. The response `releaseDecision` is about the ORDER, not the payment: by the time we see a signature the tokens have moved and cannot be un-moved, so the only decision left is whether to hand over goods. `release` means ship. `review` means hold — a person needs to look, and that includes the case where no screening provider is configured. `refuse` means do not ship; the payment is still recorded, because we received the tokens and that fact does not go away. Idempotent twice over: on txSig globally, so one payment cannot pay two orders, and on (merchant, externalId), so one order is not paid twice. A 409 means the transaction has not finalized yet and you should retry; a 400 means it never will be claimable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxWalletPaymentConfirm();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxWalletPaymentConfirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxWalletPaymentConfirmResponse**](../Model/CreateCbxWalletPaymentConfirmResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxWalletPaymentQuote()`

```php
createCbxWalletPaymentQuote(): \Crossly\Model\CreateCbxWalletPaymentQuoteResponse
```

Build a transfer for the buyer to sign themselves.

Returns an unsigned, base64 transaction. The buyer's wallet signs and submits it; we never hold a key or a delegation and never submit anything, so the platform has no authority over their tokens at any point. RESERVES NOTHING — no row, no hold, no balance change. The buyer may never sign it. The SIGNATURE is the event, so treat this as a convenience and not a commitment. `lastValidBlockHeight` is when it expires: a wallet prompt left open for a couple of minutes produces a transaction the chain will reject, and you should re-quote rather than retry. `payerCanCover` is a courtesy read of their balance so you can warn before a prompt rather than after a failure; null means we could not read it, which is not the same as \"no\". The buyer needs no prior wallet registration: a payment proves control of the tokens, which is what a connect-and-verify step would have been proving.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxWalletPaymentQuote();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxWalletPaymentQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxWalletPaymentQuoteResponse**](../Model/CreateCbxWalletPaymentQuoteResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxWalletPaymentResolve()`

```php
createCbxWalletPaymentResolve($payment_id): \Crossly\Model\CreateCbxWalletPaymentResolveResponse
```

A human decides on a held payment.

Only moves a payment OUT of `review`, never between the other two. A refusal that could later be flipped to a release is an approval control with no teeth, and a release re-decided as a refusal after the goods shipped is a record that no longer describes what happened. The reviewer and their note are stored on the row, because this is the decision somebody will be asked to justify.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = 'payment_id_example'; // string

try {
    $result = $apiInstance->createCbxWalletPaymentResolve($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxWalletPaymentResolve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**|  |

### Return type

[**\Crossly\Model\CreateCbxWalletPaymentResolveResponse**](../Model/CreateCbxWalletPaymentResolveResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCbxWalletVerify()`

```php
createCbxWalletVerify(): \Crossly\Model\CreateCbxWalletVerifyResponse
```

Complete wallet verification with the user's signature.

The signature is checked against the message WE issued and stored, never one supplied here. The nonce is single-use, so the same signature cannot re-verify an address later.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->createCbxWalletVerify();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->createCbxWalletVerify: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\CreateCbxWalletVerifyResponse**](../Model/CreateCbxWalletVerifyResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCbxAdCredit()`

```php
getCbxAdCredit(): \Crossly\Model\GetCbxAdCreditResponse
```

Unspent advertising credit, in cents.

Advertising is payable in CBX and nothing else. Your budget is denominated in dollars, priced at the spot when your payment finalized — deliberately NOT held as a token quantity, since a price move would otherwise silently change the budget you prepaid, making you a market participant because you bought ads. Credit is 1:1 with market value: with CBX the only way to pay there is nothing to discount against. Spendable on advertising only, and not refundable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCbxAdCredit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->getCbxAdCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetCbxAdCreditResponse**](../Model/GetCbxAdCreditResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCbxClaim()`

```php
getCbxClaim($claim_id): \Crossly\Model\GetCbxClaimResponse
```

A claim's current state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string

try {
    $result = $apiInstance->getCbxClaim($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->getCbxClaim: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | **string**|  |

### Return type

[**\Crossly\Model\GetCbxClaimResponse**](../Model/GetCbxClaimResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCbxCredit()`

```php
getCbxCredit(): \Crossly\Model\GetCbxCreditResponse
```

A seller's wholesale credit line.

Trade credit, not token-collateralized lending. The line is secured by receivables we already hold — the payout stream sits under a hold with an exposure ceiling — and secondarily by goods bought from our own wholesale channel. CBX is the alignment mechanism, not the collateral: a stake raises the limit and lowers the rate, bounded to a share of the earned limit so a price collapse can never remove the majority of a facility. The limit may FALL. A drawn balance is never accelerated or margin-called — there is no liquidation engine, no keeper and no oracle trigger anywhere in it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCbxCredit();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->getCbxCredit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetCbxCreditResponse**](../Model/GetCbxCreditResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCbxMe()`

```php
getCbxMe(): \Crossly\Model\GetCbxMeResponse
```

Identity check — which merchant this key belongs to, and its terms.

Returns the economics your merchant is configured with, so an integration can display accurate terms rather than hard-coding ours. Note `claimsEnabled`: off means balances are store credit that cannot leave, which is the default and the smaller regulatory posture.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCbxMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->getCbxMe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetCbxMeResponse**](../Model/GetCbxMeResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCbxPool()`

```php
getCbxPool(): \Crossly\Model\GetCbxPoolResponse
```

Your events-pool balance.

Funded by the skim on in-marketplace CBX spending, the community share of withdrawal fees, and lapsed balances. Sponsor budgets are tracked separately and are not included here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCbxPool();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->getCbxPool: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetCbxPoolResponse**](../Model/GetCbxPoolResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCbxRevenue()`

```php
getCbxRevenue(): \Crossly\Model\GetCbxRevenueResponse
```

Operator revenue accrued and not yet withdrawn.

Your share of the spend skim plus your half of withdrawal fees, denominated in CBX. It sits inside the reserve until swept, which is why it is tracked here rather than inferred: without a number saying how much of the reserve is yours, there is no safe amount to take out.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCbxRevenue();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->getCbxRevenue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetCbxRevenueResponse**](../Model/GetCbxRevenueResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCbxSubjectBalance()`

```php
getCbxSubjectBalance($subject_id): \Crossly\Model\GetCbxSubjectBalanceResponse
```

What a subject holds: pending cents and available CBX.

Two numbers because they are two different things. `pendingCents` is cashback earned but still inside its window — reversible, denominated in dollars, not yet tokens. `availableBaseUnits` is CBX they hold now. Amounts are strings because a token balance can exceed what a JSON number represents exactly.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 'subject_id_example'; // string

try {
    $result = $apiInstance->getCbxSubjectBalance($subject_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->getCbxSubjectBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_id** | **string**|  |

### Return type

[**\Crossly\Model\GetCbxSubjectBalanceResponse**](../Model/GetCbxSubjectBalanceResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCbxSubjectBalanceBySubjectId()`

```php
getCbxSubjectBalanceBySubjectId($subject_id): \Crossly\Model\GetCbxSubjectBalanceBySubjectIdResponse
```

All three balances a subject holds.

EARNED is cashback and affiliate accruals — withdrawable once matured and above the claim floor. GRANTED is ad credit, wholesale draws and promos — spendable in your marketplace only, never withdrawable, so it creates no sell pressure. CONNECTED is the subject's own self-custodied CBX, reachable through a bounded delegation; it was never our liability and does not enter the reserve invariant. `connectedAvailableBaseUnits` is delegation HEADROOM, not a wallet balance — the subject may hold less than they approved, or have revoked on chain without telling us, so treat it as a ceiling and let the spend re-read the chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 'subject_id_example'; // string

try {
    $result = $apiInstance->getCbxSubjectBalanceBySubjectId($subject_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->getCbxSubjectBalanceBySubjectId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_id** | **string**|  |

### Return type

[**\Crossly\Model\GetCbxSubjectBalanceBySubjectIdResponse**](../Model/GetCbxSubjectBalanceBySubjectIdResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCbxSubjectSpent()`

```php
getCbxSubjectSpent($subject_id): \Crossly\Model\GetCbxSubjectSpentResponse
```

Total CBX a subject has spent in your marketplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 'subject_id_example'; // string

try {
    $result = $apiInstance->getCbxSubjectSpent($subject_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->getCbxSubjectSpent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_id** | **string**|  |

### Return type

[**\Crossly\Model\GetCbxSubjectSpentResponse**](../Model/GetCbxSubjectSpentResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCbxSubjectStake()`

```php
getCbxSubjectStake($subject_id): \Crossly\Model\GetCbxSubjectStakeResponse
```

A subject's staking state and spendable balance.

`availableBaseUnits` is the number a checkout must use — balance minus anything locked. `earnBoostBps` reads zero once an unstake has been requested, because the boost ends with the commitment; `feeDiscountBps` survives the cooldown, since withdrawing is exactly what somebody in cooldown is trying to do.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 'subject_id_example'; // string

try {
    $result = $apiInstance->getCbxSubjectStake($subject_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->getCbxSubjectStake: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_id** | **string**|  |

### Return type

[**\Crossly\Model\GetCbxSubjectStakeResponse**](../Model/GetCbxSubjectStakeResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCbxSubjectWallet()`

```php
getCbxSubjectWallet($subject_id): \Crossly\Model\GetCbxSubjectWalletResponse
```

The verified payout address for a subject, if any.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 'subject_id_example'; // string

try {
    $result = $apiInstance->getCbxSubjectWallet($subject_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->getCbxSubjectWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_id** | **string**|  |

### Return type

[**\Crossly\Model\GetCbxSubjectWalletResponse**](../Model/GetCbxSubjectWalletResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCbxTreasury()`

```php
getCbxTreasury(): \Crossly\Model\GetCbxTreasuryResponse
```

Your most recent reserve reconciliation.

Coverage is your reserve measured against what you owe your users, including claims already in flight. Below 100% your conversions stop — we will not credit balances that nothing backs. Claims and spends keep working, because those move value out and improve coverage.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCbxTreasury();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->getCbxTreasury: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Crossly\Model\GetCbxTreasuryResponse**](../Model/GetCbxTreasuryResponse.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCbxAdCreditLedger()`

```php
listCbxAdCreditLedger(): V1List
```

Ad-credit movements, newest first.

Append-only. `purchase_cbx` and `grant` add; `ad_spend` and `expire` subtract. There is no refund kind and there will not be one: advertising credit exists to buy advertising, and any exit at face value turns it into a currency exchange.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCbxAdCreditLedger();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->listCbxAdCreditLedger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCbxBoosts()`

```php
listCbxBoosts(): V1List
```

Your funded cashback boosts, newest first.

`spentCents` against `budgetCents` is the live burn. The budget is a hard ceiling enforced inside the accrual transaction, so a boost cannot overspend — when it runs out, matching orders quietly fall back to your base rate rather than failing or accruing zero.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCbxBoosts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->listCbxBoosts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCbxCampaignPayouts()`

```php
listCbxCampaignPayouts($campaign_id): V1List
```

What a campaign actually paid, with the weight behind each amount.

The weight is kept so a payout can be explained to the person who received it. \"Why did I get this much\" should have an answer that is not \"the algorithm\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_id = 'campaign_id_example'; // string

try {
    $result = $apiInstance->listCbxCampaignPayouts($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->listCbxCampaignPayouts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**|  |

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCbxCampaigns()`

```php
listCbxCampaigns(): V1List
```

Your campaigns, newest first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCbxCampaigns();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->listCbxCampaigns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCbxDisbursementProgress()`

```php
listCbxDisbursementProgress(): V1List
```

How close each rule is to firing — the public counter.

Safe to show users. A climbing counter toward a known number is the reason to prefer cadence-plus-threshold over a pure threshold: people can see the pool rising and know roughly when the next event is possible. A trigger nobody can anticipate generates suspicion rather than anticipation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCbxDisbursementProgress();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->listCbxDisbursementProgress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCbxDisbursementRules()`

```php
listCbxDisbursementRules(): V1List
```

Threshold rules that fire community distributions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCbxDisbursementRules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->listCbxDisbursementRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCbxEarnTiers()`

```php
listCbxEarnTiers(): V1List
```

Earn terms on offer — longer maturation, higher rate.

A term structure on a rebate, not a yield: the user chooses WHEN to be paid for a purchase they already made, and a longer wait earns more. Nothing accrues to a balance for being held. Show these at checkout so the choice is the user's — the rate is snapshot onto the accrual, so a tier edited later never reprices a promise already made.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCbxEarnTiers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->listCbxEarnTiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCbxRedemptionServices()`

```php
listCbxRedemptionServices(): V1List
```

Services payable in CBX, and the discount each carries.

Paying in CBX costs less than paying in dollars, which is what makes anybody choose it. These are real services with real cost behind them rather than a sink invented to soak up supply — and sinks matter: supply is fixed, so tokens that only ever accumulate starve the market the protocol has to buy from.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCbxRedemptionServices();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->listCbxRedemptionServices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCbxStakeTiers()`

```php
listCbxStakeTiers(): V1List
```

Staking tiers — what locking tokens buys.

Staking pays NOTHING. It confers a lower withdrawal fee and a higher earn rate on future purchases: a discount for commitment, not a return on a holding. Staked tokens never leave the user — they stay in their balance and stay backed by the reserve — they simply become unspendable until unstaked.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCbxStakeTiers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->listCbxStakeTiers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCbxSubjectGrants()`

```php
listCbxSubjectGrants($subject_id): V1List
```

Live grants, soonest-expiring first.

That ordering is the allocation order: a spend consumes the grant closest to lapsing, so value about to expire is used before value that will not. Grants with no expiry sort last.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 'subject_id_example'; // string

try {
    $result = $apiInstance->listCbxSubjectGrants($subject_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->listCbxSubjectGrants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_id** | **string**|  |

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCbxSubjectLedger()`

```php
listCbxSubjectLedger($subject_id, $limit): V1List
```

A subject's CBX ledger, newest first.

Append-only. The balance is the sum of these rows and there is no cached balance anywhere that could disagree with them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subject_id = 'subject_id_example'; // string
$limit = 50; // int

try {
    $result = $apiInstance->listCbxSubjectLedger($subject_id, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->listCbxSubjectLedger: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject_id** | **string**|  |
 **limit** | **int**|  | [optional] [default to 50]

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCbxWalletPaymentReview()`

```php
listCbxWalletPaymentReview(): V1List
```

Payments held for a human — the ops queue.

Every row here is money taken and goods not shipped, which is not a state to leave a buyer in without it appearing on a list. `riskLevel` and `riskExposures` are the verdict as recorded at the time, not re-derived — asking a provider again next month answers a different question than the one already decided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: PersonalAccessToken
$config = Crossly\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Crossly\Api\CBXApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listCbxWalletPaymentReview();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CBXApi->listCbxWalletPaymentReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**V1List**](../Model/V1List.md)

### Authorization

[PersonalAccessToken](../../README.md#PersonalAccessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
