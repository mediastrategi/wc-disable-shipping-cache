.PHONY: release
release:
	cd .. && zip -r wc-disable-shipping-cache.zip wc-disable-shipping-cache -x \*.git\* -x \*README.md -x \*Makefile
