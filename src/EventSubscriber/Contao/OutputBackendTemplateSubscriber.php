<?php

namespace GES\Contao\BESortedNavBundle\EventSubscriber\Contao;

use Contao\BackendUser;
use GES\Contao\BESortedNavBundle\GESBESortedNavBundle;

class OutputBackendTemplateSubscriber
{
    public function __invoke(string $buffer, string $template): string
    {
        if (
            $template === 'be_main'
            && $user = BackendUser::getInstance()
        ) {
            if ($user->ges_beSortNav ?? false) {
                $script = GESBESortedNavBundle::getScript();
                $buffer = str_replace('</body>', "\t$script\n</body>", $buffer);
            }
        }

        return $buffer;
    }
}
