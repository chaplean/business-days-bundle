Getting Started With Chaplean Business Days Bundle
====================================
# Installation

## 1. Composer

```
composer require chaplean/business-days-bundle
```

## 2. AppKernel.php

Add
```
new Chaplean\Bundle\MailerBundle\ChapleanBusinessDaysBundle(),
```

## 3. config.yml

```
- { resource: '@ChapleanBusinessDaysBundle/Resources/config/config.yml' }
```