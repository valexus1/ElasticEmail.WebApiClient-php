<?php
	namespace ElasticEmailEnums; 

abstract class CreditType
{
    /**
     * Used to send emails.  One credit = one email.
     */
    const Email = 9;

    /**
     * Used to run a litmus test on a template.  1 credit = 1 test.
     */
    const Litmus = 11;

}
