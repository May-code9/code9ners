<?php
use App\WebsiteCategory;
use App\Website;
use App\User;
use App\WebsiteFeature;

function noSiteCategory()
{
  $countCategory = WebsiteCategory::count();
  return $countCategory;
}
function noTrashSiteCategory()
{
  $countCategory = WebsiteCategory::onlyTrashed()->count();
  return $countCategory;
}
function noWebsite()
{
  $countWebsite = Website::count();
  return $countWebsite;
}
function noTrashedWebsite()
{
  $countWebsite = Website::onlyTrashed()->count();
  return $countWebsite;
}
function noUser()
{
  $countUser = User::count();
  return $countUser;
}
function noSiteFeature()
{
  $countFeature = WebsiteFeature::count();
  return $countFeature;
}
function noTrashedSiteFeature()
{
  $countFeature = WebsiteFeature::onlyTrashed()->count();
  return $countFeature;
}
