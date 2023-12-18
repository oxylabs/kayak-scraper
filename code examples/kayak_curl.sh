curl --user user:pass \
'https://realtime.oxylabs.io/v1/queries' \
-H "Content-Type: application/json" \
-d '{"source": "universal", "url": "https://www.kayak.com/flights?lang=en&skipapp=true&gclid=cj0kcqiayewrbhddarisagp1mwtslj68r0mxjxpe-mrylvdskkh_10kzpcobndrwa1exgvkpkmfz5a0aat1cealw_wcb&aid=104711689875"}'