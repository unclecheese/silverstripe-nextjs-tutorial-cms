<?php

use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;
use App\Models\ContentPage;
use DNADesign\Elemental\Extensions\ElementalPageExtension;
// remove PasswordValidator for SilverStripe 5.0
$validator = PasswordValidator::create();
// Settings are registered via Injector configuration - see passwords.yml in framework
Member::set_password_validator($validator);

ContentPage::remove_extension(ElementalPageExtension::class);
