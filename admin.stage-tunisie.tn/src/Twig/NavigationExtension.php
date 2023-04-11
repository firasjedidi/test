<?php
  
namespace App\Twig;

use App\Repository\BlocsCmsRepository;
use App\Repository\NavigationListeRepository;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;
use App\Repository\NavigationRepository;
  
class NavigationExtension extends AbstractExtension
{
    private $navigationRepository;
    private $navigationListeRepository;
    private $blocsCmsRepository;
    public function __construct(NavigationRepository $navigationRepository,NavigationListeRepository $navigationListeRepository, BlocsCmsRepository $blocsCmsRepository)
    {
        $this->navigationRepository = $navigationRepository;
        $this->navigationListeRepository = $navigationListeRepository;
        $this->blocsCmsRepository = $blocsCmsRepository;

    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('ItemsNavigations', [$this, 'ItemsNavigationsFunction']),
            new TwigFunction('getParentNavigation', [$this, 'getParentNavigationFunction']),
            new TwigFunction('ItemsBloc_cms', [$this, 'ItemsBloc_cmsFunction']),
            
        ];
    }
  
    public function ItemsNavigationsFunction()
    {
        $tab = $this->navigationRepository->findAll();
        return $tab;
    }

    public function getParentNavigationFunction($id_parent)
    {
      
        $tab = $this->navigationListeRepository->find($id_parent);
        return $tab;
    }
    public function ItemsBloc_cmsFunction()
    {
      
        $tab = $this->blocsCmsRepository->findAll();
        return $tab;
    }
}