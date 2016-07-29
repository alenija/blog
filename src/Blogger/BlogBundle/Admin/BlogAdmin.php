<?PHP

namespace Blogger\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Blogger\BlogBundle\Entity\Blog;
use Symfony\Component\HttpFoundation\File\File;

use Knp\Menu\ItemInterface as MenuItemInterface;

class BlogAdmin extends AbstractAdmin
{
    /**
     * Конфигурация отображения записи
     *
     * @param \Sonata\AdminBundle\Show\ShowMapper $showMapper
     * @return void
     */
    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id', null, array('label' => 'Идентификатор'))
            ->add('title', null, array('label' => 'Заголовок'))
            ->add('author', null, array('label' => 'Автор'))
            ->add('blog', null, array('label' => 'Текст'))
            ->add('created', null, array('label' => 'Дата публикации'))
            ->add('updated', null, array('label' => 'Дата изменения'))
            ->add('tags', null, array('label' => 'Теги'))
            ->add('image', null, array('label' => 'Изображение'))
            ->add('slug', null, array('label' => 'Заголовок'))
        ;
    }

    /**
     * Конфигурация формы редактирования записи
     * @param \Sonata\AdminBundle\Form\FormMapper $formMapper
     * @return void
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', null, array('label' => 'Заголовок'))
            ->add('author', null, array('label' => 'Автор'))
            ->add('blog', null, array('label' => 'Текст'))
            ->add('created', null, array('label' => 'Дата публикации'))
            ->add('updated', null, array('label' => 'Дата изменения'))
            ->add('tags', null, array('label' => 'Теги'))
            ->add('image', null, array('label' => 'Изображение'))
            ->add('slug', null, array('label' => 'Заголовок'))
        ;
    }

    /**
     * Конфигурация списка записей
     *
     * @param \Sonata\AdminBundle\Datagrid\ListMapper $listMapper
     * @return void
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->addIdentifier('title', null, array('label' => 'Заголовок'))
            ->add('created', null, array('label' => 'Дата публикации'))
            ->add('tags', null, array('label' => 'Теги'));
    }

    /**
     * Поля, по которым производится поиск в списке записей
     *
     * @param \Sonata\AdminBundle\Datagrid\DatagridMapper $datagridMapper
     * @return void
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title', null, array('label' => 'Заголовок'));
    }

    /**
     * Конфигурация левого меню при отображении и редатировании записи
     *
     * @param \Knp\Menu\ItemInterface $menu
     * @param $action
     * @param null|\Sonata\AdminBundle\Admin\Admin $childAdmin
     *
     * @return void
     */
//    protected function configureSideMenu(MenuItemInterface $menu, $action, AbstractAdmin $childAdmin = null)
//    {
//        $menu->addChild(
//            $action == 'edit' ? 'Просмотр новости' : 'Редактирование новости',
//            array('uri' => $this->generateUrl(
//                $action == 'edit' ? 'show' : 'edit', array('id' => $this->getRequest()->get('id'))))
//        );
//    }
}
