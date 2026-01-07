# Testing

This document describes the quality assurance tools and testing workflows available in this project.

## Code refactoring

Automatically refactors code to modern standards and applies best practices.

| Tool                             | Command               | Target | Purpose                        |
| -------------------------------- | --------------------- | ------ | ------------------------------ |
| [Rector](https://getrector.com/) | `composer run rector` | `src/` | Upgrade and modernize codebase |

```shell
composer run rector
```

---

## Code style and standards

Automatically fixes coding standard issues to maintain consistent code style across the project.

| Tool                                                                                 | Command            | Purpose                                   |
| ------------------------------------------------------------------------------------ | ------------------ | ----------------------------------------- |
| [Easy Coding Standard](https://github.com/easy-coding-standard/easy-coding-standard) | `composer run ecs` | Enforce PER 3.0 + PSR-12 coding standards |

```shell
composer run ecs
```

---

## Dependency checking

Checks if all dependencies are correctly defined in `composer.json` to avoid missing packages in production.

| Tool                                                                          | Command                           | Purpose                                                            |
| ----------------------------------------------------------------------------- | --------------------------------- | ------------------------------------------------------------------ |
| [composer-require-checker](https://github.com/maglnet/ComposerRequireChecker) | `composer run check-dependencies` | Verify all used classes and functions are declared as dependencies |

```shell
composer run check-dependencies
```

---

## Mutation Testing

Evaluates the quality of your test suite by introducing mutations and checking if tests catch them.

| Tool                                      | Command                 | Coverage | Purpose                          |
| ----------------------------------------- | ----------------------- | -------- | -------------------------------- |
| [Infection](https://infection.github.io/) | `composer run mutation` | 100% MSI | Measure test suite effectiveness |

```shell
composer run mutation
```

---

## Mutation Testing with Static Analysis

Combines mutation testing with PHPStan analysis for comprehensive quality checks.

```shell
composer run mutation-static
```

---

## Static Analysis

Performs static code analysis to detect bugs, type errors, and code quality issues before runtime.

| Tool                            | Command               | Level     | Purpose                               |
| ------------------------------- | --------------------- | --------- | ------------------------------------- |
| [PHPStan](https://phpstan.org/) | `composer run static` | Level Max | Detect type errors and potential bugs |

```shell
composer run static
```

---

## Unit Testing

Executes unit tests to verify functionality and ensure code correctness.

| Tool                           | Command              | Framework   | Purpose              |
| ------------------------------ | -------------------- | ----------- | -------------------- |
| [PHPUnit](https://phpunit.de/) | `composer run tests` | PHPUnit 10+ | Verify code behavior |

```shell
composer run tests
```
