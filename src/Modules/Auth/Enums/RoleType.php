<?php

namespace Modules\Auth\Enums;

enum RoleType: string
{
    case Admin = 'admin';
    case TeamOwner = 'team_owner';
    case TeamMember = 'team_member';
}
