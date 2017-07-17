## User address

<a name="create" />
### Add user address

**`POST` `/mobileapi/address/create`**

Add a user address with `cookies'.

**_Paramers_**

* `null`
    
**_Form_**

* `address_type`
* `lastname`
* `firstname`
* `telephone`
* `company`
* `fax`
* `postcode`
* `city`
* `address1`
* `address2`
* `country_id`
* `state` - province

**_Examples_**

```js
/mobileapi/address/create
    Form:  address_type=billing, shipping / / whether to set the default billing and default delivery address
               lastname=leo
               firstname=liew
               telephone=13631841987
               company=kalengo
               fax=524521
               postcode=123456
               city=GuangZhou
               address1=Yiyuan
               address2=Street10
               country_id=US
               state=GUANGDONG
```

**_Response_**

```js
{
    "code":0,
    "msg":"save or update user address success!",
    "model":null
}
```

---------------------------------------

<a name="update" />
### Update the user address

**`POST` `/mobileapi/address/create`**

Modify the user address, must bring `cookies`.

**_Paramers_**

* `null`
    
**_Form_**

* `address_type`
* `lastname`
* `firstname`
* `telephone`
* `company`
* `fax`
* `postcode`
* `city`
* `address1`
* `address2`
* `country_id`
* `state`   - province
* `address_book_id` - the address id to be updated

**_Examples_**

```js
    /mobileapi/address/create
        Form:  address_type=billing,shipping //whether to set the default billing and default delivery address
               lastname=leo
               firstname=liew
               telephone=13631841987
               company=kalengo
               fax=524521
               postcode=123456
               city=GuangZhou
               address1=Yiyuan
               address2=Street109
               country_id=US
               state=GUANGDONG
               address_book_id=137
```

**_Response_**

```js
    {
        "code":0,
        "msg":"save or update user address success!",
        "model":null
    }
```

---------------------------------------

<a name="getAddress" />
### Get the user's single address details

**`GET` `/mobileapi/address/getAddress`**

To get the user's single address details, bring `cookies`.

**_Paramers_**

* `address_id` - user address ID

**_Examples_**

```js
    /mobileapi/address/getAddress?address_id=106
```

**_Response_**

```js
    {
        code: 0,
        msg: "get user address success!",
        model: {
            entity_id: "106",
            entity_type_id: "2",
            name: "terry wei",
            country: "AT",
            attribute_set_id: "0",
            parent_id: "137",
            created_at: "2015-05-20T10:34:01-07:00",
            updated_at: "2015-05-20 02:34:01",
            is_active: "1",
            firstname: "terry",
            lastname: "wei",
            company: "kalengo",
            city: "guangzhou",
            region: "Salzburg",
            postcode: "002",
            country_id: "AT",
            telephone: "123222",
            fax: "524521",
            region_id: 98,
            street: [
                "xinhuajie"
            ],
            customer_id: "137",
            is_default_billing: true,
            is_default_shipping: true
        }
    }
```

---------------------------------------

<a name="delete" />
### Delete the user address

**`GET` `/mobileapi/address/delete`**

Delete the user address, call the interface must bring `cookies`.

**_Paramers_**

* `address_id` - user address ID

**_Examples_**

```js
    /mobileapi/address/delete?address_id=111
```

**_Response_**

```js
    {
        code: 0,
        msg: null,
        model: true   //deleted successfully
    }
```

---------------------------------------

<a name="getAddressList" />
### Get the user address list

**`GET` `/mobileapi/address/getAddressList`**


To get a list of user addresses, bring `cookies`.

**_Paramers_**

* `null`

**_Examples_**

```js
    /mobileapi/address/getAddressList
```

**_Response_**

```js
{
    code: 0,
    msg: "get user address list success!",
    model: [
        {
            entity_id: "106",
            entity_type_id: "2",
            name: "terry wei",
            country: "10",
            attribute_set_id: "0",
            parent_id: "137",
            created_at: "2015-05-21 07:34:58",
            updated_at: "2015-05-20 01:47:31",
            is_active: "1",
            firstname: "terry",
            lastname: "wei",
            company: "kalengo",
            city: "guangzhou",
            region: "Armed Forces Middle East",
            postcode: "002",
            country_id: "10",
            telephone: "123222",
            fax: "524521",
            region_id: 5,
            street: [
                "xinhuajie"
            ],
            customer_id: "137"
        }
    ]
}
```

---------------------------------------
