#!/bin/bash
export TESTS="StorefrontGuestCheckoutTest AdminCreateCustomerWithCountryUSATest AdminCreateNewCustomerOnStorefrontTest StorefrontCustomerCheckoutTest AddConfigurableProductToOrderFromShoppingCartTest StorefrontReorderAsGuestTest StorefrontUpdateWishlistTest StorefrontClearAllCompareProductsTest MoveConfigurableProductsInComparedOnOrderPageTest CreateInvoiceWithZeroSubtotalCheckoutTest CreateInvoiceWithShipmentAndCheckInvoicedOrderTest AdminCreateCreditMemoPartialRefundTest AdminCreateOrderWithSimpleProductTest AdminCreateSimpleProductTest AdminConfigurableProductCreateTest AdminCreateCategoryTest AdminCreateAndEditBundleProductSettingsTest AdminCreateAndEditConfigurableProductSettingsTest AdminCreateAndEditVirtualGiftCardProductSettingsTest"

## Setup
function setup() {
    bin/magento config:set twofactorauth/general/force_providers google
    bin/magento config:set twofactorauth/google/otp_window 60
    bin/magento security:tfa:google:set-secret admin I5XW6Z3MMVPVS33VOJPXGZLDOJSXIX3LMV4Q====

    cp /deployment/.credentials ./dev/tests/acceptance/.credentials
    cp /deployment/.env ./dev/tests/acceptance/.env
    cp ./dev/tests/acceptance/.htaccess.sample ./dev/tests/acceptance/.htaccess

    vendor/bin/mftf build:project
    vendor/bin/mftf generate:test $TESTS
}

## If not --skip-setup then setup
if [ "$1" != "--skip-setup" ]; then
    setup
fi

## Run tests
vendor/bin/mftf run:test $TESTS --remove

