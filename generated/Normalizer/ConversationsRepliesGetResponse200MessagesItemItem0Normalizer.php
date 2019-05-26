<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConversationsRepliesGetResponse200MessagesItemItem0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem0';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ConversationsRepliesGetResponse200MessagesItemItem0();
        $data = clone $data;
        if (property_exists($data, 'last_read')) {
            $value = $data->{'last_read'};
            if (is_string($data->{'last_read'})) {
                $value = $data->{'last_read'};
            }
            $object->setLastRead($value);
            unset($data->{'last_read'});
        }
        if (property_exists($data, 'replies')) {
            $values = [];
            foreach ($data->{'replies'} as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, 'JoliCode\\Slack\\Api\\Model\\ConversationsRepliesGetResponse200MessagesItemItem0RepliesItem', 'json', $context);
            }
            $object->setReplies($values);
            unset($data->{'replies'});
        }
        if (property_exists($data, 'reply_count')) {
            $object->setReplyCount($data->{'reply_count'});
            unset($data->{'reply_count'});
        }
        if (property_exists($data, 'source_team')) {
            $object->setSourceTeam($data->{'source_team'});
            unset($data->{'source_team'});
        }
        if (property_exists($data, 'subscribed')) {
            $object->setSubscribed($data->{'subscribed'});
            unset($data->{'subscribed'});
        }
        if (property_exists($data, 'team')) {
            $object->setTeam($data->{'team'});
            unset($data->{'team'});
        }
        if (property_exists($data, 'text')) {
            $object->setText($data->{'text'});
            unset($data->{'text'});
        }
        if (property_exists($data, 'thread_ts')) {
            $value_2 = $data->{'thread_ts'};
            if (is_string($data->{'thread_ts'})) {
                $value_2 = $data->{'thread_ts'};
            }
            $object->setThreadTs($value_2);
            unset($data->{'thread_ts'});
        }
        if (property_exists($data, 'ts')) {
            $value_3 = $data->{'ts'};
            if (is_string($data->{'ts'})) {
                $value_3 = $data->{'ts'};
            }
            $object->setTs($value_3);
            unset($data->{'ts'});
        }
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
            unset($data->{'type'});
        }
        if (property_exists($data, 'unread_count')) {
            $object->setUnreadCount($data->{'unread_count'});
            unset($data->{'unread_count'});
        }
        if (property_exists($data, 'user')) {
            $object->setUser($data->{'user'});
            unset($data->{'user'});
        }
        if (property_exists($data, 'user_profile')) {
            $object->setUserProfile($this->denormalizer->denormalize($data->{'user_profile'}, 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfileShort', 'json', $context));
            unset($data->{'user_profile'});
        }
        if (property_exists($data, 'user_team')) {
            $object->setUserTeam($data->{'user_team'});
            unset($data->{'user_team'});
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', $key)) {
                $object[$key] = $value_4;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLastRead()) {
            $value = $object->getLastRead();
            if (is_string($object->getLastRead())) {
                $value = $object->getLastRead();
            }
            $data->{'last_read'} = $value;
        }
        if (null !== $object->getReplies()) {
            $values = [];
            foreach ($object->getReplies() as $value_1) {
                $values[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'replies'} = $values;
        }
        if (null !== $object->getReplyCount()) {
            $data->{'reply_count'} = $object->getReplyCount();
        }
        if (null !== $object->getSourceTeam()) {
            $data->{'source_team'} = $object->getSourceTeam();
        }
        if (null !== $object->getSubscribed()) {
            $data->{'subscribed'} = $object->getSubscribed();
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $object->getTeam();
        }
        if (null !== $object->getText()) {
            $data->{'text'} = $object->getText();
        }
        if (null !== $object->getThreadTs()) {
            $value_2 = $object->getThreadTs();
            if (is_string($object->getThreadTs())) {
                $value_2 = $object->getThreadTs();
            }
            $data->{'thread_ts'} = $value_2;
        }
        if (null !== $object->getTs()) {
            $value_3 = $object->getTs();
            if (is_string($object->getTs())) {
                $value_3 = $object->getTs();
            }
            $data->{'ts'} = $value_3;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getUnreadCount()) {
            $data->{'unread_count'} = $object->getUnreadCount();
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        }
        if (null !== $object->getUserProfile()) {
            $data->{'user_profile'} = $this->normalizer->normalize($object->getUserProfile(), 'json', $context);
        }
        if (null !== $object->getUserTeam()) {
            $data->{'user_team'} = $object->getUserTeam();
        }
        foreach ($object as $key => $value_4) {
            if (preg_match('/.*/', $key)) {
                $data->{$key} = $value_4;
            }
        }

        return $data;
    }
}
