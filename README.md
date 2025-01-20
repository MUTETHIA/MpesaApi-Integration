M-Pesa C2B Integration Guide
Introduction

This document outlines the steps required for integrating M-Pesa C2B (Customer to Business) payments into your application. The integration enables customers to make payments directly to your business via M-Pesa using the Paybill or Buy Goods service.
Prerequisites

    M-Pesa Business Account: Ensure you have an active M-Pesa Paybill or Buy Goods number issued by Safaricom.
    Access to the Safaricom Daraja API: You need access to Safaricom's API through the Daraja API.
    API Credentials: You'll need your Shortcode, Lipa Na M-Pesa Online shortcode, and Security credentials (used for authentication).

Steps for Integration
1. Setting Up the M-Pesa Paybill or Buy Goods Account

To start accepting payments, ensure you have the following:

    Paybill/Buy Goods Number: Your unique business identifier.
    Shortcode: Provided by Safaricom upon registration.
    Shortcode Secret/Password: This is used for securing the transaction request.
    Lipa Na M-Pesa Online Account: For enabling the online payment capability.

2. Request API Credentials from Safaricom

You will need API credentials that Safaricom provides after registering your business on the Safaricom Developer Portal:

    Shortcode (paybill or till number)
    Lipa Na M-Pesa Online shortcode
    Security Credential (provided by Safaricom when you register)

These credentials will be required to authenticate and authorize API requests.
