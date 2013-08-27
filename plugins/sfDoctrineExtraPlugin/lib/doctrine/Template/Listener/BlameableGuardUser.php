<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lpodda
 * Date: 8/27/13
 * Time: 12:34 PM
 * To change this template use File | Settings | File Templates.
 */
/**
 * extending Doctrine_Template_Listener_Blameable to use symfony sf_guard_user id
 */
class BlameableGuardUser extends Doctrine_Template_Listener_Blameable
{
    /**
     *
     * @return int $ident sf_guard_user.id
     */
    public function getUserIdentity()
    {
        $ident = sfContext::getInstance()->getUser()->getGuardUser()->getId();

        return $ident;
    }
}