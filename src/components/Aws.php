<?php

namespace codexten\yii\aws\components;

use Aws\Pinpoint\PinpointClient;
use Aws\Sns\SnsClient;
use yii\base\Component;
use yii\helpers\ArrayHelper;

class Aws extends Component
{
    public $key;
    public $secret;
    public $region;
    public $version = 'latest';

    /**
     * @param array $config
     * @return PinpointClient
     */
    public function pinpoint($config = [])
    {
        return new PinpointClient(ArrayHelper::merge($this->getDefaultConfig(), $config));
    }

    /**
     * @param array $config
     * @return SnsClient
     */
    public function sns($config = [])
    {
        return new SnsClient(ArrayHelper::merge($this->getDefaultConfig(), $config));
    }

    protected function getDefaultConfig()
    {
        return [
            'credentials' => [
                'key' => $this->key,
                'secret' => $this->secret,
            ],
            'region' => $this->region,
            'version' => $this->version,
        ];
    }
}