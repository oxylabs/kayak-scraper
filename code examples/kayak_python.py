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