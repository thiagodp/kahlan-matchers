# kahlan-matchers

> Additional matchers for [Kahlan](https://kahlan.github.io/)

## Install

> Requires PHP 7 and the extension `mbstring`

```bash
composer require phputil/kahlan --dev
```

See [tips](tips.md) for help.


## Matchers

- Exception:
  - [toThrowAnExceptionThatMatches](spec/ToThrowAnExceptionThatMatches.spec.php) - compares an exception message with the given Regular Expression
  - [toThrowAnExceptionWithCode](spec/ToThrowAnExceptionWithCode.spec.php) - compares an exception code with the given code
- String:
  - [toHaveStringLength](spec/ToHaveStringLength.spec.php) - compares a _multi-byte_ string length with the given length

> Suggestions? Please [open an Issue](https://github.com/thiagodp/kahlan-matchers/issues).

## License

[MIT](LICENSE) © [Thiago Delgado Pinto](https://github.com/thiagodp)
