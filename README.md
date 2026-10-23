<!-- markdownlint-disable MD041 -->
<p align="center">
    <picture>
        <source media="(prefers-color-scheme: dark)" srcset="https://www.yiiframework.com/image/design/logo/yii3_full_for_dark.svg">
        <source media="(prefers-color-scheme: light)" srcset="https://www.yiiframework.com/image/design/logo/yii3_full_for_light.svg">
        <img src="https://www.yiiframework.com/image/design/logo/yii3_full_for_light.svg" alt="Yii Framework" width="80%">
    </picture>
    <h1 align="center">Template</h1>
    <br>
</p>
<!-- markdownlint-enable MD041 -->

<p align="center">
    <a href="https://github.com/yii2-extensions/template/actions/workflows/build.yml" target="_blank">
        <img src="https://img.shields.io/github/actions/workflow/status/yii2-extensions/template/build.yml?style=for-the-badge&label=PHPUnit&logo=github" alt="PHPUnit">
    </a>
    <a href="https://dashboard.stryker-mutator.io/reports/github.com/yii2-extensions/template/main" target="_blank">
        <img src="https://img.shields.io/endpoint?style=for-the-badge&url=https%3A%2F%2Fbadge-api.stryker-mutator.io%2Fgithub.com%2Fyii2-extensions%2Ftemplate%2Fmain" alt="Mutation Testing">
    </a>
    <a href="https://github.com/yii2-extensions/template/actions/workflows/static.yml" target="_blank">
        <img src="https://img.shields.io/github/actions/workflow/status/yii2-extensions/template/static.yml?style=for-the-badge&label=PHPStan&logo=github" alt="PHPStan">
    </a>
    <a href="https://github.com/yii2-extensions/template/actions/workflows/security.yml" target="_blank">
        <img src="https://img.shields.io/github/actions/workflow/status/yii2-extensions/template/security.yml?style=for-the-badge&label=Security&logo=github" alt="Security">
    </a>
</p>

<p align="center">
    <strong>A Yii2 extension template to create your own Yii2 extensions</strong><br>
    <em>PHPUnit, PHPStan, Infection, ECS, and GitHub Actions ready out of the box</em>
</p>

## Features

<picture>
    <source media="(min-width: 768px)" srcset="./docs/svgs/features.svg">
    <img src="./docs/svgs/features-mobile.svg" alt="Feature Overview" style="width: 100%;">
</picture>

## Quick start

### Installation

```bash
composer require github_username/github_repository-name "yiisoft/yii2:^22.0@dev"
```

### Basic usage

Describe how to use your extension in a basic way.

```php
use yii\template\Example;

$example = new Example();

$legacy = $example->getExample(true);
```

## Documentation

- 📚 [Installation guide](docs/installation.md)
- ⚙️ [Configuration guide](docs/configuration.md)
- 💡 [Usage examples](docs/examples.md)
- 🧪 [Testing guide](docs/testing.md)

The guides and the [API reference](https://yii2-framework.github.io/docs/extensions/template/reference/) generated from
the PHPDoc in `src/` are published at <https://yii2-framework.github.io/docs/extensions/template/>.

## AI assistance

AI agents: read the [documentation index](https://yii2-framework.github.io/docs/llms.txt) and fetch the Markdown version
of a page by appending `index.md` to its URL. The
[AI agents guide](https://yii2-framework.github.io/docs/project/ai-agents/) covers skill installation, client setup and
verification.

- 🧭 [`yii2-framework` skill](https://yii2-framework.github.io/docs/guide/skills/yii2-framework/): Yii 22.0 application
  conventions.

The hosted documentation covers Yii 22.0. If it does not match the installed revision or is unavailable, use the
[repository guides](#documentation), the source PHPDoc and the [changelog](CHANGELOG.md).

## Package information

[![PHP](https://img.shields.io/badge/%3E%3D8.3-777BB4.svg?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/releases/8.3/en.php)
[![Yii 22.0.x](https://img.shields.io/badge/22.0.x-0073AA.svg?style=for-the-badge&logo=yii&logoColor=white)](https://github.com/yiisoft/yii2/tree/22.0)

## Project status

[![Codecov](https://img.shields.io/codecov/c/github/yii2-extensions/template.svg?style=for-the-badge&logo=codecov&logoColor=white&label=Coverage)](https://codecov.io/github/yii2-extensions/template)
[![PHPStan Level Max](https://img.shields.io/badge/PHPStan-Level%20Max-4F5D95.svg?style=for-the-badge&logo=github&logoColor=white)](https://github.com/yii2-extensions/template/actions/workflows/static.yml)
[![Quality](https://img.shields.io/github/actions/workflow/status/yii2-extensions/template/quality.yml?style=for-the-badge&label=Quality&logo=github)](https://github.com/yii2-extensions/template/actions/workflows/quality.yml)
[![StyleCI](https://img.shields.io/badge/StyleCI-Passed-44CC11.svg?style=for-the-badge&logo=github&logoColor=white)](https://github.styleci.io/repos/698621511?branch=main)

## Our social networks

[![Follow on X](https://img.shields.io/badge/-Follow%20on%20X-1DA1F2.svg?style=for-the-badge&logo=x&logoColor=white&labelColor=000000)](https://x.com/Terabytesoftw)
[![Follow on Facebook](https://img.shields.io/badge/-Follow%20on%20Facebook-1877F2.svg?style=for-the-badge&logo=facebook&logoColor=white&labelColor=000000)](https://www.facebook.com/wilmer.arambula.9)
[![Join our Subreddit](https://img.shields.io/badge/-Join%20our%20Subreddit-FF4500.svg?style=for-the-badge&logo=reddit&logoColor=white&labelColor=000000)](https://www.reddit.com/r/Yii2/)
[![Join on Telegram](https://img.shields.io/badge/-Join%20on%20Telegram-26A5E4.svg?style=for-the-badge&logo=telegram&logoColor=white&labelColor=000000)](https://t.me/yii_framework_in_english)

## License

[![License](https://img.shields.io/badge/License-BSD--3--Clause-brightgreen.svg?style=for-the-badge&logo=opensourceinitiative&logoColor=white&labelColor=555555)](LICENSE)
