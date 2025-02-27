# GetCustomersResponseBody


## Fields

| Field                                                       | Type                                                        | Required                                                    | Description                                                 |
| ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- | ----------------------------------------------------------- |
| `id`                                                        | *string*                                                    | :heavy_check_mark:                                          | The unique identifier of the customer in Dub.               |
| `externalId`                                                | *string*                                                    | :heavy_check_mark:                                          | Unique identifier for the customer in the client's app.     |
| `name`                                                      | *string*                                                    | :heavy_check_mark:                                          | Name of the customer.                                       |
| `createdAt`                                                 | *string*                                                    | :heavy_check_mark:                                          | The date the customer was created.                          |
| `email`                                                     | *?string*                                                   | :heavy_minus_sign:                                          | Email of the customer.                                      |
| `avatar`                                                    | *?string*                                                   | :heavy_minus_sign:                                          | Avatar URL of the customer.                                 |
| `country`                                                   | *?string*                                                   | :heavy_minus_sign:                                          | Country of the customer.                                    |
| `link`                                                      | [?Operations\Link](../../Models/Operations/Link.md)         | :heavy_minus_sign:                                          | N/A                                                         |
| `partner`                                                   | [?Operations\Partner](../../Models/Operations/Partner.md)   | :heavy_minus_sign:                                          | N/A                                                         |
| `discount`                                                  | [?Operations\Discount](../../Models/Operations/Discount.md) | :heavy_minus_sign:                                          | N/A                                                         |