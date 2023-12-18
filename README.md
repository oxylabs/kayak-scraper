# Kayak Scraper API

[![Oxylabs promo code](https://user-images.githubusercontent.com/129506779/250792357-8289e25e-9c36-4dc0-a5e2-2706db797bb5.png)](https://oxylabs.go2cloud.org/aff_c?offer_id=7&aff_id=877&url_id=112)

Oxylabs’ [Kayak Scraper](https://oxylabs.io/products/scraper-api/web/kayak?utm_source=github&utm_medium=repositories&utm_campaign=product) is a data gathering solution allowing you to extract real-time information from an Kayak website effortlessly. This brief guide explains how an Kayak Scraper works and provides code examples to understand better how you can use it hassle-free.

### How it works

You can get Kayak results by providing your own URLs to our service. We can return the HTML for any Kayak page you like.

#### Python code example

The example below illustrates how you can get HTML of Kayak page.

```python
import requests
from pprint import pprint

# Structure payload.
payload = {
    'source': 'universal',
    'url': 'https://www.kayak.com/flights?lang=en&skipapp=true&gclid=cj0kcqiayewrbhddarisagp1mwtslj68r0mxjxpe-mrylvdskkh_10kzpcobndrwa1exgvkpkmfz5a0aat1cealw_wcb&aid=104711689875'
}

# Get response.
response = requests.request(
    'POST',
    'https://realtime.oxylabs.io/v1/queries',
    auth=('user', 'pass1'),
    json=payload,
)

# Instead of response with job status and results url, this will return the
# JSON response with the result.
pprint(response.json())
```
Find code examples for other programming languages [**here**](https://github.com/oxylabs/kayak-scraper/tree/main/code%20examples)

#### Output Example
```json
{
  "results": [
    {
      "content": "<!DOCTYPE html><html dir=\"ltr\" lang=\"en-us\"><head><style nonce=\"\">.LGLeeN-keyboard-shortcuts-view{di ... </html>",
      "created_at": "2023-12-18 11:10:59",
      "updated_at": "2023-12-18 11:11:25",
      "page": 1,
      "url": "https://www.kayak.com/flights?lang=en&skipapp=true&gclid=cj0kcqiayewrbhddarisagp1mwtslj68r0mxjxpe-mrylvdskkh_10kzpcobndrwa1exgvkpkmfz5a0aat1cealw_wcb&aid=104711689875",
      "job_id": "7142471303692346369",
      "status_code": 200
    }
  ]
}
```
With our Kayak Scraper, you can easily extract public data from any Kayak web page. Gather crucial travel information, such as ticket prices, hotel reviews, or destination descriptions, to analyze the travel market and stay ahead of your competitors. If you have any inquiries, contact our support team via live chat or email us at hello@oxylabs.io.