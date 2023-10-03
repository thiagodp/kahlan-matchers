# Tips

> The following tips also apply to other extensions, such as `pcre`. Just replace `mbstring` with `pcre`.

1. How to check if the PHP extension `mbstring` is enabled:
    - Windows: `php -m | findstr mbstring`
    - MacOS/Linux: `php -m | grep mbstring`

2. How to enable the extension `mbstring`:
    - See where your `php.ini` file is by running `php --ini`
    - Add `extension=mbstring` to it.

3. How to install `mbstring` in a Debian-based Linux distro (e.g. Ubuntu):
    ```bash
    sudo apt install php-mbstring
    ```
