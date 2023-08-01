<?php

namespace App\Definitions;

enum SettingKeys: string
{
    case FACEBOOK_LINK = 'facebook-link';
    case LINKED_IN_LINK = 'linked-in-link';
    case TWITTER_LINK = 'twitter-link';
    case INSTAGRAM_LINK = 'instagram-link';
    case CONTACT_PHONE_NUMBER = 'contact-phone-number';
    case CONTACT_EMAIL = 'contact-email';
}
