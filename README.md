# metamorph-demo-legacy

Deliberately outdated sample projects used to demo **Metamorph MCP** (legacy assessment, CVE checks, modernization plans).

> **Do not use any of this code in production.** It contains known-vulnerable dependency versions and insecure patterns on purpose. GitHub security alerts on this repository are expected.

## Folders
| Folder | What it is | Score from Metamorph (2026-10-31) |
|---|---|---|
| `php-shop/` | Old PHP storefront: `mysql_*` API, SQL built from request input, `md5` passwords, dynamic include, PHP 7.2, vulnerable Guzzle and Symfony | **17 / 100** |
| `node-orders/` | Old Node API: Node 10, vulnerable lodash and express, deprecated `request`, committed `.env`, no tests, no CI | **43 / 100** |
| `php-shop-modernized/` | The shop after modernization: PHP 8.4, PDO prepared statements, `password_hash`, patched dependencies, Dockerfile, CI | **100 / 100** |

Scores come from the Metamorph assessment rules and live vulnerability data (OSV), so they can change as new advisories are published.

## Try it
Point `assess_project` at this repository and set `subfolder` to one of the folders above:
- `repo_url`: the URL of this repository
- `subfolder`: `php-shop`, `node-orders` or `php-shop-modernized`

Then call `plan_modernization` for the ordered fix stages and the projected score after each one.

## Why separate from the main project
The main Metamorph repository stays free of vulnerable manifests so its own dependency alerts stay meaningful.
