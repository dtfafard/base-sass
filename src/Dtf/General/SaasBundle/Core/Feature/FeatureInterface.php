<?phpQ

namespace Dtf\General\SaasBundle\Core;

/**
 *
 * @author psyk3hoe
 */
interface FeatureInterface
{
    /**
     * @return string   The name of the feature
     */
    public function getName();

    /**
     * @return string[] The name of the other features this feature depends on
     */
    public function getDependencies();

    /**
     * @return boolean  If the feature is required for the system to load or
     *                  can it be hidden to the user.
     */
    public function isRequired();
}