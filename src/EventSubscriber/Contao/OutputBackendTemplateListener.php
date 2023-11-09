<?php

namespace GES\Contao\BESortedNavBundle\EventSubscriber\Contao;

use Contao\BackendUser;
use Contao\CoreBundle\DependencyInjection\Attribute\AsHook;
use GES\Contao\BESortedNavBundle\GESBESortedNavBundle;

#[AsHook('outputBackendTemplate')]
class OutputBackendTemplateListener
{
    public function __invoke(string $buffer, string $template): string
    {
        if (
            $template === 'be_main'
            && $user = BackendUser::getInstance()
        ) {
            if ($user->ges_beSortNav) {
                $script = GESBESortedNavBundle::getScript();
                $buffer = str_replace('</body>', "\t$script\n</body>", $buffer);
            }
        }

        return $buffer;
    }
}
