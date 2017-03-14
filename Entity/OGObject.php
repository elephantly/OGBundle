<?php

namespace Elephantly\OGBundle\Entity;

/**
* primary @author purplebabar(lalung.alexandre@gmail.com)
*/
class OGObject
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $image;

    /**
     * @var string
     */
    protected $url;

    protected $audio = null;

    protected $description = null;

    protected $determiner = null;

    protected $locale = null;

    protected $localeAlternate = null;

    protected $siteName = null;

    protected $video = null;

    protected $imageSecureUrl = null;

    protected $imageType = null;

    protected $imageWidth = null;

    protected $imageHeight = null;

    protected $createdAt;

    protected $updatedAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * Get the value of Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of Title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     *
     * @param string title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of Type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of Type
     *
     * @param string type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of Image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of Image
     *
     * @param string image
     *
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of Url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of Url
     *
     * @param string url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of Audio
     *
     * @return mixed
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * Set the value of Audio
     *
     * @param mixed audio
     *
     * @return self
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * Get the value of Description
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of Description
     *
     * @param mixed description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of Determiner
     *
     * @return mixed
     */
    public function getDeterminer()
    {
        return $this->determiner;
    }

    /**
     * Set the value of Determiner
     *
     * @param mixed determiner
     *
     * @return self
     */
    public function setDeterminer($determiner)
    {
        $this->determiner = $determiner;

        return $this;
    }

    /**
     * Get the value of Locale
     *
     * @return mixed
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set the value of Locale
     *
     * @param mixed locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get the value of Locale Alternate
     *
     * @return mixed
     */
    public function getLocaleAlternate()
    {
        return $this->localeAlternate;
    }

    /**
     * Set the value of Locale Alternate
     *
     * @param mixed localeAlternate
     *
     * @return self
     */
    public function setLocaleAlternate($localeAlternate)
    {
        $this->localeAlternate = $localeAlternate;

        return $this;
    }

    /**
     * Get the value of Site Name
     *
     * @return mixed
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * Set the value of Site Name
     *
     * @param mixed siteName
     *
     * @return self
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;

        return $this;
    }

    /**
     * Get the value of Video
     *
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set the value of Video
     *
     * @param mixed video
     *
     * @return self
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get the value of Image Secure Url
     *
     * @return mixed
     */
    public function getImageSecureUrl()
    {
        return $this->imageSecureUrl;
    }

    /**
     * Set the value of Image Secure Url
     *
     * @param mixed imageSecureUrl
     *
     * @return self
     */
    public function setImageSecureUrl($imageSecureUrl)
    {
        $this->imageSecureUrl = $imageSecureUrl;

        return $this;
    }

    /**
     * Get the value of Image Type
     *
     * @return mixed
     */
    public function getImageType()
    {
        return $this->imageType;
    }

    /**
     * Set the value of Image Type
     *
     * @param mixed imageType
     *
     * @return self
     */
    public function setImageType($imageType)
    {
        $this->imageType = $imageType;

        return $this;
    }

    /**
     * Get the value of Image Width
     *
     * @return mixed
     */
    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * Set the value of Image Width
     *
     * @param mixed imageWidth
     *
     * @return self
     */
    public function setImageWidth($imageWidth)
    {
        $this->imageWidth = $imageWidth;

        return $this;
    }

    /**
     * Get the value of Image Height
     *
     * @return mixed
     */
    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * Set the value of Image Height
     *
     * @param mixed imageHeight
     *
     * @return self
     */
    public function setImageHeight($imageHeight)
    {
        $this->imageHeight = $imageHeight;

        return $this;
    }

    /**
     * Get the value of Created At
     *
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of Created At
     *
     * @param mixed createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of Updated At
     *
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of Updated At
     *
     * @param mixed updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}
