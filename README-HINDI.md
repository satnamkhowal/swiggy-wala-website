# SwiggyWala.com website setup

## Contact details

`config.php` खोलकर:

- Booking और WhatsApp number: `9929797091`
- `PHONE_DISPLAY`, `PHONE_TEL` और `WHATSAPP_NUMBER` `config.php` में updated हैं।
- `OFFICE_ADDRESS` — पूरा business address

Email अभी `info@swiggywala.com` रखा गया है। जरूरत हो तो `SUPPORT_EMAIL` बदलें।

## Images कहाँ रखनी हैं

Excel sheet में exact filename और folder दिया है। उन्हीं नामों से WebP images रखें:

- `assets/images/destinations/`
- `assets/images/packages/`
- `assets/images/blog/`

## HD logo files

नया vector master और सभी common ratios `assets/images/brand/` में हैं। Website header और footer अब SVG logo use करते हैं, इसलिए logo हर screen पर sharp रहेगा। Folder के `README.md` में हर logo file का exact use दिया है।

## Service pages

`services.php` में सभी service categories हैं और `services/` folder में 55 individual SEO pages हैं। Self-drive car rental secondary partner service के रूप में रखा गया है; यह homepage के primary business focus में नहीं है।

## Hosting

पूरा `swiggywala` folder Hostinger `public_html` में upload करें। PHP 8.1 या newer चुनें। Domain SSL चालू रखें।

Contact form अभी data validate करके confirmation दिखाता है। Live email delivery के लिए SMTP/mail service connect करनी होगी। WhatsApp और phone buttons `config.php` update करते ही काम करेंगे।

## SEO launch checklist

- सभी planned WebP images upload करें
- Google Search Console और Analytics connect करें
- `sitemap.xml` Search Console में submit करें
- final phone, address, social profiles और legal business details डालें
- blog facts, prices और attraction timings launch से पहले recheck करें
