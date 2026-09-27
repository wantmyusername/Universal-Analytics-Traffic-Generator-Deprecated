# Universal Analytics Traffic Generator — *Deprecated*

> **Deprecated / historical code.** This repository is old code that targets **Universal Analytics**, which was shut down on **July 1, 2023**. The scripts no longer work and are kept only as a memory of what this once was. Not maintained, not to be used.

## What this code was

Two PHP scripts that generated synthetic traffic (pageviews/sessions) for a Universal Analytics property by firing requests at Google Analytics' legacy collection endpoints with randomized payloads.

| File | What it did |
|---|---|
| `c.php` | Built `/r/collect` pageview hits in a loop and rendered them as `<img>` tags. Randomized the client ID, geographic region (`FR`, `DE`, `CN`), language, device `User-Agent` (mobile / PC / tablet) and the organic source (`google` / keyword `lightoflifetv`). |
| `event.php` | Sent legacy `__utm.gif` hits via cURL in a loop, randomizing the visitor cookie, campaign, referrer and social source. |

### Hardcoded tracking ID

Both scripts targeted the Universal Analytics property `UA-139938670-1`.

## Status

- **Universal Analytics** was deprecated and stopped processing data on **July 1, 2023**.
- The legacy endpoints used here (`google-analytics.com/__utm.gif` and `/r/collect`) no longer exist in this form and do not accept data.
- **This code is non-functional.** It is preserved only as a historical artifact.

## Disclaimer

Published for historical/reference purposes only. Its only purpose was to generate artificial analytics traffic, which violates the terms of service of analytics platforms and can be considered fraud. **Do not use it.**
