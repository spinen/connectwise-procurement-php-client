# PurchaseOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**_info** | [**\Spinen\ConnectWise\Clients\Procurement\Model\Metadata**](Metadata.md) | Metadata of the entity | [optional] 
**business_unit_id** | **int** |  | [optional] 
**cancel_reason** | **string** |  | [optional] 
**closed_flag** | **bool** |  | [optional] 
**customer_city** | **string** |  | [optional] 
**customer_company** | [**\Spinen\ConnectWise\Clients\Procurement\Model\CompanyReference**](CompanyReference.md) |  | [optional] 
**customer_contact** | [**\Spinen\ConnectWise\Clients\Procurement\Model\ContactReference**](ContactReference.md) |  | [optional] 
**customer_country** | [**\Spinen\ConnectWise\Clients\Procurement\Model\CountryReference**](CountryReference.md) |  | [optional] 
**customer_extension** | **string** |  | [optional] 
**customer_name** | **string** |  | [optional] 
**customer_phone** | **string** |  | [optional] 
**customer_site** | [**\Spinen\ConnectWise\Clients\Procurement\Model\SiteReference**](SiteReference.md) |  | [optional] 
**customer_site_name** | **string** |  | [optional] 
**customer_state** | **string** |  | [optional] 
**customer_street_line1** | **string** |  | [optional] 
**customer_street_line2** | **string** |  | [optional] 
**customer_zip** | **string** |  | [optional] 
**date_closed** | [**\DateTime**](\DateTime.md) |  | [optional] 
**drop_ship_customer_flag** | **bool** |  | [optional] 
**entered_by** | **string** |  | [optional] 
**freight_cost** | **double** |  | [optional] 
**freight_packing_slip** | **string** |  | [optional] 
**freight_tax_total** | **double** |  | [optional] 
**internal_notes** | **string** |  | [optional] 
**location_id** | **int** |  | 
**po_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**po_number** | **string** |  | [optional] 
**sales_tax** | **double** |  | [optional] 
**shipment_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**shipment_method** | [**\Spinen\ConnectWise\Clients\Procurement\Model\ShipmentMethodReference**](ShipmentMethodReference.md) |  | [optional] 
**shipping_instructions** | **string** |  | [optional] 
**status** | [**\Spinen\ConnectWise\Clients\Procurement\Model\PurchaseOrderStatusReference**](PurchaseOrderStatusReference.md) |  | 
**sub_total** | **double** |  | [optional] 
**tax_code** | [**\Spinen\ConnectWise\Clients\Procurement\Model\TaxCodeReference**](TaxCodeReference.md) |  | [optional] 
**tax_freight_flag** | **bool** |  | [optional] 
**tax_po_flag** | **bool** |  | [optional] 
**terms** | [**\Spinen\ConnectWise\Clients\Procurement\Model\BillingTermsReference**](BillingTermsReference.md) |  | 
**total** | **double** |  | [optional] 
**tracking_number** | **string** |  | [optional] 
**update_shipment_info** | **bool** | Determines whether or not to update all of the shipment info for each associated line item when new shipment info is passed in | [optional] 
**update_vendor_order_number** | **bool** | Determines whether or not to update vendor order number for each associated line item when new vendor order number is passed in | [optional] 
**vendor_company** | [**\Spinen\ConnectWise\Clients\Procurement\Model\CompanyReference**](CompanyReference.md) |  | 
**vendor_contact** | [**\Spinen\ConnectWise\Clients\Procurement\Model\ContactReference**](ContactReference.md) |  | [optional] 
**vendor_invoice_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**vendor_invoice_number** | **string** |  | [optional] 
**vendor_order_number** | **string** |  | [optional] 
**vendor_site** | [**\Spinen\ConnectWise\Clients\Procurement\Model\SiteReference**](SiteReference.md) |  | [optional] 
**warehouse** | [**\Spinen\ConnectWise\Clients\Procurement\Model\WarehouseReference**](WarehouseReference.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


